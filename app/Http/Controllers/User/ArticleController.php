<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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

        $articleCates = Category::where('status', 1)
            ->where('type', 'article')
            ->orderBy('order', 'asc')
            ->get();

        $page = Page::where('route', 'article')->first();

        return view('pages.user.article.index', [
            'articles' => $articles,
            'otherArticles' => $otherArticles,
            'articleCates' => $articleCates,
            'page' => $page,
            'cate' => null
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)
            ->where('type', 'article')
            ->where('status', 1)
            ->first();

        $otherArticles = Article::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->limit(6)
            ->get();

        $articleCates = Category::where('status', 1)
            ->where('type', 'article')
            ->orderBy('order', 'asc')
            ->get();

        if (!$category) {
            $article = Article::where('slug', $slug)
                ->where('status', 1)
                ->first();

            return view('pages.user.article.detail', [
                'article' => $article,
                'otherArticles' => $otherArticles,
                'articleCates' => $articleCates
            ]);
        } else {
            $articles = Article::where('cat_id', $category->id)
                ->orderBy('created_at', 'desc')
                ->where('status', 1)
                ->paginate(6);

            return view('pages.user.article.index', [
                'articles' => $articles,
                'otherArticles' => $otherArticles,
                'articleCates' => $articleCates,
                'cate' => $category
            ]);
        }

        abort(404);        
    }

}