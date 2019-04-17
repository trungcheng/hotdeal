<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return view('pages.user.article.index', [
            
        ]);
    }

    public function detail()
    {
        return view('pages.user.article.detail', [
            
        ]);
    }

}