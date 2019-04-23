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
        $slides = Slide::where('status', 1)->orderBy('created_at', 'desc')->get();
    	$featureProducts = Product::where('is_feature', 1)->limit(12)->get();
    	$saleProducts = Product::where('discount', '>', 0)->orderBy('discount', 'desc')->limit(12)->get();

        $chauda = Product::where('cat_id', 1)->orderBy('created_at', 'desc')->limit(24)->get()->chunk(8);
        $chauinox = Product::whereIn('cat_id', [2])
            ->orderBy('created_at', 'desc')
            ->limit(24)->get()->chunk(8);
        $voiruabat = Product::where('cat_id', 3)->orderBy('created_at', 'desc')->limit(24)->get()->chunk(8);

        $featureArticles = Article::where('status', 1)->where('is_feature', 1)->limit(12)->get();

        return view('pages.user.home.index', [
            'slides' => $slides,
            'featureProducts' => $featureProducts,
            'saleProducts' => $saleProducts,
            'chauda' => $chauda,
            'chauinox' => $chauinox,
            'voiruabat' => $voiruabat,
            'featureArticles' => $featureArticles
        ]);
    }
}