<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Page;

class ArticleController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->paginate(6);

        $otherArticles = Article::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->limit(6)
            ->get();

        $page = Page::where('route', 'article')->first();

        return view('pages.user.article.index', [
            'articles' => $articles,
            'otherArticles' => $otherArticles,
            'page' => $page
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->first();
        if ($article) {
            $otherArticles = Article::orderBy('created_at', 'desc')
                ->where('status', 1)
                ->limit(6)
                ->get();

            return view('pages.user.article.detail', [
                'article' => $article,
                'otherArticles' => $otherArticles
            ]);
        }

        abort(404);        
    }

}