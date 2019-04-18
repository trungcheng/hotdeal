<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index()
    {
    	$featureProducts = Product::where('is_feature', 1)->limit(12)->get();
    	$saleProducts = Product::where('discount', '>', 0)->orderBy('discount', 'desc')->limit(12)->get();

        return view('pages.user.home.index', [
            'featureProducts' => $featureProducts,
            'saleProducts' => $saleProducts
        ]);
    }
}