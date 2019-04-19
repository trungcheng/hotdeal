<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function getSignIn()
    {
        // var_dump(\Auth::user());die;
        return view('pages.user.auth.signin', [
            
        ]);
    }

    public function getSignUp()
    {
        return view('pages.user.auth.signup', [
            
        ]);
    }
}