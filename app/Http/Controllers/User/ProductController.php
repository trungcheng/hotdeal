<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use App\Models\Article;

class ProductController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function detail(Request $request, $slug)
    {
        if ($slug == 'admin') return redirect('/admin/access/login');

        $data = $request->all();

        $category = Category::where('slug', $slug)->first();
        if (!$category) {
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                $image_list = json_decode($product->image_list);
                // $relatedProducts = Product::where('cat_id', $product->cat_id)
                //     ->where('status', 1)
                //     ->limit(12)
                //     ->get()
                //     ->except($product->id);
                
                $averageReview = 0.0;
                $reviews = Review::where('pro_id', $product->id)
                    ->where('status', 1)
                    ->get();
                $sumStar = Review::where('pro_id', $product->id)
                    ->where('status', 1)
                    ->sum('star');
                
                if (count($reviews) > 0) {
                    $averageReview = $sumStar / count($reviews);
                }

                return view('pages.user.product.detail', [
                    'product' => $product,
                    'image_list' => $image_list,
                    'reviews' => $reviews,
                    'averageReview' => round($averageReview, 1)
                    // 'relatedProducts' => $relatedProducts
                ]);
            }
        } else {
            $products = Product::where('cat_id', $category->id)
                ->where('status', 1);

            if ($request->has('order')) {
                $filters = explode('-', $data['order']);
                $products->orderBy($filters[0], $filters[1]);
            } else {
                $products->orderBy('created_at', 'desc');
            }
    
            $results = $products->paginate(isset($request->num) ? $request->num : 12);

            return view('pages.user.product.store', [
                'results' => $results,
                'cate' => $category->name,
                'type' => 'product'
            ]);
        }

        abort(404);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $products = Product::where('id', '>', 0)->where('status', 1);

        if ($request->has('order')) {
            $filters = explode('-', $data['order']);
            $products->orderBy($filters[0], $filters[1]);
        } else {
            $products->orderBy('created_at', 'desc');
        }

        $results = $products->paginate(isset($request->num) ? $request->num : 12);

        return view('pages.user.product.store', [
            'results' => $results,
            'cate' => 'all',
            'type' => 'product'
        ]);

    }

    public function search(Request $request)
    {
        if ($request->exists('key')) {
            if (is_null($request->key)) $request->key = 'null';
            $results = Product::where('name', 'LIKE', '%'.$request->key.'%')
            // ->orWhere('short_desc', 'LIKE', '%'.$request->key.'%')
            // ->orWhere('full_desc', 'LIKE', '%'.$request->key.'%')
            ->paginate(12);

            return view('pages.user.page.search', [
                'results' => $results,
                'key' => $request->key
            ]);    
        }
        
        abort(404);
    }

    public function getAllSaleProd(Request $request)
    {
        $products = Product::where('discount', '>', 0)->orderBy('discount', 'desc')->limit(12)->get();
        $view = view('pages.user.product.prodajax', [
            'products' => $products
        ])->render();

        return response()->json([
            'status' => true,
            'html' => $view
        ]);
    }

    public function getAllChauDaProd(Request $request)
    {
        $products = Product::where('cat_id', 1)->orderBy('created_at', 'desc')->paginate(8);
        $view = view('pages.user.product.prodajax', [
            'products' => $products
        ])->render();

        return response()->json([
            'status' => true,
            'html' => $view,
            'products' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage()
            ]
        ]);
    }

    public function getAllChauInoxProd(Request $request)
    {
        $products = Product::where('cat_id', 2)->orderBy('created_at', 'desc')->paginate(8);
        $view = view('pages.user.product.prodajax', [
            'products' => $products
        ])->render();

        return response()->json([
            'status' => true,
            'html' => $view,
            'products' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage()
            ]
        ]);
    }

    public function getAllVoiRuaBatProd(Request $request)
    {
        $products = Product::where('cat_id', 3)->orderBy('created_at', 'desc')->paginate(8);
        $view = view('pages.user.product.prodajax', [
            'products' => $products
        ])->render();

        return response()->json([
            'status' => true,
            'html' => $view,
            'products' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage()
            ]
        ]);
    }
}