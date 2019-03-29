<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slide;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
    	$proBrands = [];

        $slides = Slide::where('status', 1)->orderBy('created_at', 'desc')->get();

    	$topSales = Product::where('discount', '>', 0)->orderBy('created_at', 'desc')->limit(10)->get();
    	$features = Product::where('is_feature', 1)
    		->with('category')
    		->orderBy('created_at', 'desc')->limit(9)->get();
    	$brands = Category::orderBy('created_at', 'asc')->get();
    	if (count($brands) > 0) {
    		$proBrands = Product::where('cat_id', $brands[0]->id)->limit(9)->get();
    	}

        return view('pages.user.home.index', [
            'slides' => $slides,
            'topSales' => $topSales,
            'features' => $features,
            'brands' => $brands,
            'proBrands' => $proBrands
        ]);
    }

    public function brand()
    {
        $brands = Category::orderBy('created_at', 'asc')->get();

        return view('pages.user.home.brand', [
            'brands' => $brands
        ]);
    }
}