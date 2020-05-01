<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

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

    public function paymentMethod()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'payment-method',
                'title' => 'Phương thức thanh toán'
            ]);
        }

        abort(404);
    }

    public function deliveryMethod()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'delivery-method',
                'title' => 'Phương thức vận chuyển'
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
                'title' => 'Chính sách đổi trả'
            ]);
        }

        abort(404);
    }

    public function recruitment()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'recruitment',
                'title' => 'Thông tin tuyển dụng'
            ]);
        }

        abort(404);
    }

    public function saleOff()
    {
        $article = \DB::table('pages')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article,
                'route' => 'saleoff',
                'title' => 'Chương trình khuyến mãi'
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