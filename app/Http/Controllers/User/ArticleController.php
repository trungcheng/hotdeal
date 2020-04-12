<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        $articles = Article::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('pages.user.article.index', [
            'articles' => $articles,
            'title' => 'Tin tức'
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)
            ->where('type', 'article')
            ->first();
        if (!$category) {
            $article = Article::where('slug', $slug)
                ->where('status', 1)
                ->first();
                
            if ($article) {
                return view('pages.user.article.detail', [
                    'article' => $article
                ]);
            }
        } else {
            $articles = Article::where('cat_id', $category->id)
                ->where('status', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(6);
                
            return view('pages.user.article.index', [
                'articles' => $articles,
                'title' => 'Tin tức ' . strtolower($category->name)
            ]);
        }

        abort(404);        
    }

}