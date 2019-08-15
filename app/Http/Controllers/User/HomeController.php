<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return view('pages.user.home.index', []);
    }

    public function navigate(Request $request, $slug)
    {
    	if ($slug == 'admin') return redirect('/admin/access/login');
    }
}