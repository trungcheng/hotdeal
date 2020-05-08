<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        $categoryChosen = Category::where('status', 1)
            ->where('type', 'product')
            ->where('is_home', 1)
            ->get();

        if (!empty($categoryChosen)) {
            foreach ($categoryChosen as $category) {
                if ($category->parent_id == 0) {
                    $category['cateRoot'] = $category;
                } else {
                    $category['cateRoot'] = Category::find($category->parent_id);
                }
            }
        }

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
            'categoryChosen' => $categoryChosen,
            // 'featureProducts' => $featureProducts,
            'featureArticles' => $featureArticles
        ]);
    }
}