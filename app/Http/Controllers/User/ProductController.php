<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function index(Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
        if ($product) {
            $relatedProducts = Product::where('cat_id', $product->cat_id)->limit(6)->get()->except($product->id);

            return view('pages.user.product.detail', [
                'product' => $product,
                'relatedProducts' => $relatedProducts
            ]);
        }

        abort(404);
    }

    public function store(Request $request, $sex)
    {
        return view('pages.user.product.store', []);
    }
}