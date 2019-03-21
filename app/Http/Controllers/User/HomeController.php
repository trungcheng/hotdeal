<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
    	$proBrands = [];
    	$topSales = Product::where('discount', '>', 0)->orderBy('created_at', 'desc')->limit(6)->get();
    	$features = Product::where('is_feature', 1)
    		->with('category')
    		->orderBy('created_at', 'desc')->limit(9)->get();
    	$brands = Category::orderBy('created_at', 'desc')->limit(5)->get();
    	if (!empty($brands)) {
    		$proBrands = Product::where('cat_id', $brands[0]->id)->get();
    	}

        return view('pages.user.home.index', [
            'topSales' => $topSales,
            'features' => $features,
            'brands' => $brands,
            'proBrands' => $proBrands
        ]);
    }
}