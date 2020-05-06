<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function about()
    {
        $article = Page::where('route', 'about')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function paymentMethod()
    {
        $article = Page::where('route', 'payment-method')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function deliveryMethod()
    {
        $article = Page::where('route', 'delivery-method')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function policyExchange()
    {
        $article = Page::where('route', 'policy-exchange')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function policySecurity()
    {
        $article = Page::where('route', 'policy-security')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function termOfService()
    {
        $article = Page::where('route', 'term-of-service')->first();
        if ($article) {
            return view('pages.user.page.about', [
                'article' => $article
            ]);
        }

        abort(404);
    }

    public function contact()
    {
        $article = Page::where('route', 'contact')->first();
        if ($article) {
            return view('pages.user.page.contact', [
                'article' => $article
            ]);
        }

        abort(404);
    }

}