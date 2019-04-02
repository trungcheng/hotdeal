<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;

class ArticleController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
    	$brands = Category::orderBy('created_at', 'asc')->get();

        return view('pages.user.home.brand', [
            'brands' => $brands
        ]);
    }

}