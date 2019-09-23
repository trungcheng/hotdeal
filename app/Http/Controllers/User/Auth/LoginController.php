<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Response;
use Session;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $maxLoginAttempts = 5; // Amount of bad attempts user can make
    
    protected $lockoutTime = 60; // Time for which user is going to be blocked in seconds

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user.guest')->except('logout');
    }

    public function loginLDAP(Request $request){
        try {
            $data = $request->all();
            if ($data && isset($data['username']) && isset($data['password'])) {

                if ($this->hasTooManyLoginAttempts($request)) {
                    $this->fireLockoutEvent($request);

                    return $this->sendLockoutResponse($request);
                    // return Response::json(['status' => false, 'message' => 'Đăng nhập quá nhiều lần. Vui lòng thử lại sau 60 giây.'], 429);
                }

                $ldap_dn = "uid=".$data["username"].",dc=example,dc=com";
                $ldap_password = $data["password"];
                $ldap_con = ldap_connect("ldap.forumsys.com");
                ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
                
                if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)){
                    //check exist user
                    $user = DB::table('users')->where('username', $data['username'])->where('status', 1)->first();
                    if($user){
                        $userId = $user->id;
                    }else{
                        $userId = DB::table('users')->insertGetId([
                            'username'   => $data["username"], 
                            'full_name'  => $data['username'],
                            'status'     => 1,
                            'type'       => 0,
                            'role_id'    => 3,
                            'cat_id'     => 0
                        ]);
                    }
                    Auth::guard('user')->loginUsingId($userId);
                    return Response::json(['status' => true, 'message' => 'Đăng nhập thành công.']);
                }

                $this->incrementLoginAttempts($request);

                return Response::json(['status' => false, 'message' => 'Tên đăng nhập hoặc Mật khẩu không chính xác.']);
            }
        } catch (Exception $e) {
            return Response::json(['status' => false, 'message' => 'Xảy ra lỗi trong quá trình đăng nhập.']);
        }
    }

    public function logoutLDAP(Request $request){
        Auth::guard('admin')->logout();
        Auth::guard('user')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function showLoginForm(Request $request)
    {
        $data = $request->all();
        if (!empty($data) && isset($data['m']) && isset($data['token'])) {
            $confirmationCode = utf8_decode(base64_decode($data['token']));
            $user = User::where('email', $data['m'])
                ->where('confirmation_code', $confirmationCode)
                ->first();
            if ($user) {
                $user->update(['confirmation_code' => '', 'is_confirmed' => 1]);
                Session::flash('success', 'Xác nhận đăng ký thành công');
            }
        }

        return view('pages.user.auth.signin');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $user = User::where('email', $request->get('email'))
            ->orWhere('mobile', $request->get('email'))->first();
        if ($user) {
            if ($user->is_confirmed == 0) {
                Session::flash('danger', 'Bạn chưa xác nhận đăng ký');
                return redirect('account/signin');
            }
        }

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function credentials(Request $request)
    {
        if (is_numeric($request->get('email'))) {
            return ['mobile' => $request->get('email'),'password' => $request->get('password')];
        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return ['email' => $request->get('email'), 'password' => $request->get('password')];
        }

        return ['username' => $request->get('email'), 'password' => $request->get('password')];
    }

    public function logout(Request $request)
    {
        \Auth::logout();

        return redirect('/');
    }

}
