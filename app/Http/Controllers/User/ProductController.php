<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function detail(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        if ($product) {
            $image_list = json_decode($product->image_list);
            $relatedProducts = Product::where('cat_id', $product->cat_id)->limit(12)->get()->except($product->id);

            return view('pages.user.product.detail', [
                'product' => $product,
                'image_list' => $image_list,
                'relatedProducts' => $relatedProducts
            ]);
        }

        abort(404);
    }

    public function store()
    {
        return view('pages.user.product.store', [
            
        ]);
    }
}