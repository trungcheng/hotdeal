<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Util\Util;

class WebController extends Controller
{
	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        return view('pages.user.home.index', []);
    }

    public function navigate(Request $request)
    {
    	return redirect('/admin/access/login');
    }

    public function signin()
    {
        return view('pages.user.auth.signin', []);
    }

    public function signup()
    {
        return view('pages.user.auth.signup', []);
    }

    public function about()
    {
        return view('pages.user.home.about', []);
    }

    public function contact()
    {
        return view('pages.user.home.contact', []);
    }

    public function cart()
    {
        return view('pages.user.home.cart', []);
    }

    public function checkout()
    {
        return view('pages.user.home.checkout', []);
    }

    public function post()
    {
        return view('pages.user.home.post', []);
    }

    public function postDetail()
    {
        return view('pages.user.home.post-detail', []);
    }

    public function store(Request $request)
    {
        return view('pages.user.home.store', []);

        abort(404);
    }

    public function detail(Request $request, $slug)
    {
        return view('pages.user.home.detail', []);

        abort(404);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $cates = Category::where('parent_id', 0)->where('status', 1)->get();

        $articles = Article::whereHas('translations', function ($query) use ($keyword) {
            $query->where('locale', \App::getLocale())
                  ->where(function ($q) use ($keyword) {
                        $q->where('title', 'LIKE', '%'.$keyword.'%')
                          ->orWhere('intro', 'LIKE', '%'.$keyword.'%');
                  });
        })->where('type', 'article')
          ->where('status', 1)
          ->orderBy('id', 'desc')
          ->paginate(10);

        return view('pages.user.home.search', [
            'keyword' => $keyword,
            'articles' => $articles,
            'cates' => $cates
        ]);
    }
}