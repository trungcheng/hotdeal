<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Cookie;
use Session;

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
        $this->middleware('guest')->except('logout');
    }

    public function loginCustom(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ($request->ajax()) {
            if (\Auth::attempt($data)) {
                return Response::json([
                    'status' => true,
                    'data' => Auth::user(),
                    'message' => 'Login success'
                ]);
            }

            return Response::json([
                'status' => false,
                'data' => [],
                'message' => 'Info invalid'
            ]);
        }

        $this->validateLogin($request);
        
        if (\Auth::attempt($data)) {
            $currentUser = User::find(\Auth::id());
            // Save to cookie
            Session::put('uacc',  $currentUser);
            Cookie::queue(Cookie::forget('kinghub_laracook'));
            Cookie::queue('kinghub_laracook', json_encode(Session::get('uacc')), 60);
            // return $this->sendLoginResponse($request);
            return redirect()->intended($this->redirectPath());
        } else {
            return $this->sendFailedLoginResponse($request);
        }
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        Cookie::queue(Cookie::make('token', NULL, -999999, '/', \App::environment('production') ? '.kinghub.vn' : '.khv2.xyz'));
        Cookie::queue(Cookie::make('user', NULL, -999999, '/', \App::environment('production') ? '.kinghub.vn' : '.khv2.xyz'));
        Cookie::queue(Cookie::make('expired_at', NULL, -999999, '/', \App::environment('production') ? '.kinghub.vn' : '.khv2.xyz'));

        return redirect('/login');
    }

    // public function authenticated()
    // {
    //     $currentUser = User::find(\Auth::id());
    //     if (!$currentUser->is_super_admin) {
    //         return redirect('/channels');
    //     }

    //     return redirect('/');
    // }
}
