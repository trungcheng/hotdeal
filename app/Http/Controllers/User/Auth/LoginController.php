<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

                $ldap_dn = "uid=".$data["username"].",dc=example,dc=com";
                $ldap_password = $data["password"];
                $ldap_con = ldap_connect("ldap.forumsys.com");
                ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

                if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)){
                    //check exist user
                    $user = DB::select('select * from users where username = "'.$data['username'].'" ');
                    if($user){
                    }else{
                        DB::insert('insert into users (username, full_name, status, type, role_id, cat_id) values ("'.$data['username'].'", "'.$data['username'].'", 1, 0, 3, 0)');
                    }
                    Session::put('username', $data["username"]);
                    return Response::json(['status' => true, 'message' => 'Đăng nhập thành công.']);
                }else{
                    return Response::json(['status' => false, 'message' => 'Tên đăng nhập hoặc Mật khẩu không chính xác.']);
                }  
            }
        } catch (Exception $e) {
            return Response::json(['status' => false, 'message' => 'Xảy ra lỗi trong quá trình đăng nhập.']);
        }
    }

    public function logoutLDAP(){
        Session::forget('username');
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
