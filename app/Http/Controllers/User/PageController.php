<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function about()
    {
        return view('pages.user.page.about', [
            
        ]);
    }

    public function contact()
    {
        return view('pages.user.page.contact', [
            
        ]);
    }

    public function checkoutSuccess()
    {
        return view('pages.user.page.checkout-success', [
            
        ]);
    }
}