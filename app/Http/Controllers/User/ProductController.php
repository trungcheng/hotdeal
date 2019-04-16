<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function detail()
    {
        return view('pages.user.product.detail', [
            
        ]);
    }

    public function store()
    {
        return view('pages.user.product.store', [
            
        ]);
    }
}