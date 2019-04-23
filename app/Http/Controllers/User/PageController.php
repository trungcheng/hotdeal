<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;

class PageController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function about()
    {
        $article = Article::where('is_about', 1)->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function contact()
    {
        return view('pages.user.page.contact', [
            
        ]);
    }

}