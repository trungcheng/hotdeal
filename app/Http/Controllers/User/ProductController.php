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

    public function store(Request $request)
    {
        $conditions = [];
        $data = $request->all();

        $products = Product::where('id', '>', 0);
        $brands = Category::all();

        if ($request->has('br')) {
            $products->whereIn('cat_id', $data['br']);
            foreach ($brands as $brand) {
                if (in_array($brand->id, $data['br'])) {
                    $conditions[] = $brand->name;
                }
            }
        }
        if ($request->has('pr')) {
            $arr = [];
            $final = [];
            foreach ($data['pr'] as $pr) {
                $prs = explode('-', $pr);
                $final = array_merge($arr, $prs);
                $conditions[] = $pr;
            }
            $products->whereBetween('price_sale', [min($final), max($final)]);
        }
        if ($request->has('order')) {
            $filter = $data['order'];
            $filters = explode('-', $data['order']);
            $products->orderBy($filters[0], $filters[1]);
        } else {
            $products->orderBy('created_at', 'desc');
        }

        $results = $products->paginate($request->num);

        return view('pages.user.product.store', [
            'conditions' => $conditions,
            'results' => $results
        ]);

    }
}