<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class ArticleController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
    	$articles = Article::orderBy('created_at', 'asc')->paginate(10);

        return view('pages.user.article.index', [
            'articles' => $articles
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->first();
        if ($article) {
            $others = Article::limit(12)->get()->except($article->id);

            return view('pages.user.article.detail', [
                'article' => $article,
                'others' => $others
            ]);
        }

        abort(404);
    }

    public function about(Request $request)
    {
        $article = Article::where('is_about', 1)->first();
        if ($article) {
            return view('pages.user.about.index', [
                'article' => $article
            ]);
        }

        abort(404);
    }

}