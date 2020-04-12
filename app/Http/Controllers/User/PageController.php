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
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'about',
                'title' => 'Giới thiệu'
            ]);
        }

        abort(404);
    }

    public function certificate()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'certificate',
                'title' => 'Chứng nhận chất lượng'
            ]);
        }

        abort(404);
    }

    public function policy()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'policy',
                'title' => 'Chính sách giá'
            ]);
        }

        abort(404);
    }

    public function healthAdvice()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'health-advice',
                'title' => 'Tư vấn sức khỏe'
            ]);
        }

        abort(404);
    }

    public function contact()
    {
        return view('pages.user.page.contact', []);
    }

}