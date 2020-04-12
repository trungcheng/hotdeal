<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use App\Models\Slide;
use DB;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        $slides = Slide::where('status', 1)->where('type', 'slide')->orderBy('created_at', 'desc')->get();
        // $ads = Slide::where('status', 1)->where('type', 'ads')->orderBy('created_at', 'desc')->get();
    	// $featureProducts = Product::where('is_feature', 1)->limit(12)->get();
        $featureArticles = Article::where('status', 1)->where('is_feature', 1)->limit(6)->get();
        $page = DB::table('pages')->first();

        return view('pages.user.home.index', [
            // 'ads' => $ads,
            'slides' => $slides,
            'page' => $page,
            // 'featureProducts' => $featureProducts,
            'featureArticles' => $featureArticles
        ]);
    }
}