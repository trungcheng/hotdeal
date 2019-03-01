<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return view('pages.user.home.index', [
            
        ]);
    }
}