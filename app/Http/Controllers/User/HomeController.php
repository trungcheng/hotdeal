<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use App\Models\Slide;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return redirect('/access/dashboard');
    }
}