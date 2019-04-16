<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function getSignIn()
    {
        return view('pages.user.auth.signin', [
            
        ]);
    }

    public function getSignUp()
    {
        return view('pages.user.auth.signup', [
            
        ]);
    }
}