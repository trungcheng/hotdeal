<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use App\Models\Slide;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
        $slides = Slide::where('status', 1)
            ->where('type', 'slide')
            ->orderBy('created_at', 'desc')
            ->get();

        $chauda = Product::where('cat_id', 1)
            ->orderBy('created_at', 'desc')
            ->where('status', 1)
            ->limit(7)
            ->get();

        $chauinox = Product::where('cat_id', 2)
            ->orderBy('created_at', 'desc')
            ->where('status', 1)
            ->limit(7)
            ->get();

        $voiruabat = Product::where('cat_id', 3)
            ->orderBy('created_at', 'desc')
            ->where('status', 1)
            ->limit(7)
            ->get();

        // $ads = Slide::where('status', 1)->where('type', 'ads')->orderBy('created_at', 'desc')->get();
    	// $featureProducts = Product::where('is_feature', 1)->limit(12)->get();
        $featureArticles = Article::where('status', 1)
            ->where('is_feature', 1)
            ->where('status', 1)
            ->limit(5)
            ->get();

        return view('pages.user.home.index', [
            // 'ads' => $ads,
            'slides' => $slides,
            'chauda' => $chauda,
            'chauinox' => $chauinox,
            'voiruabat' => $voiruabat,
            // 'featureProducts' => $featureProducts,
            'featureArticles' => $featureArticles
        ]);
    }
}