<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->where('is_about', 0)->paginate(6);

        return view('pages.user.article.index', [
            'articles' => $articles
        ]);
    }

    public function detail(Request $request, $slug)
    {
        return view('pages.user.article.detail', []);
        
        $article = Article::where('slug', $slug)->first();
        if ($article) {
            return view('pages.user.article.detail', [
                'article' => $article
            ]);
        }

        abort(404);        
    }

}