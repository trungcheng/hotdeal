<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo = '/vcr19dtbcdscms=rotartsinimda/access/dashboard';
    
    protected $maxLoginAttempts = 5; // Amount of bad attempts user can make
    
    protected $lockoutTime = 60; // Time for which user is going to be blocked in seconds

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('pages.admin.auth.login');
    }

    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required',
    //         'password' => 'required|min:6'
    //     ]);

    //     $dataAuth = ['username' => $request->get('email'), 'password' => $request->get('password')];
    //     if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
    //         $dataAuth = ['email' => $request->get('email'), 'password' => $request->get('password')];
    //     }

    //     if (Auth::guard('admin')->attempt($dataAuth, $request->remember)) {
    //         return redirect('/admin/access/dashboard');
    //     }

    //     return redirect()->back()->withInput($request->only('email', 'remember'));
    // }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function attemptLogin(Request $request)
    {
        return Auth::guard('admin')->attempt($this->credentials($request), $request->remember);
    }

    protected function credentials(Request $request)
    {
        if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return ['email' => $request->get('email'), 'password' => $request->get('password')];
        }

        return ['username' => $request->get('email'), 'password' => $request->get('password')];
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/vcr19dtbcdscms=rotartsinimda/access/login');
    }

}
