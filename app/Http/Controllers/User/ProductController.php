<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Article;

class ProductController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function detail(Request $request, $slug)
    {
        if ($slug == 'admin') return redirect('/admin/access/login');
        $category = Category::where('slug', $slug)->first();
        if (!$category) {
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                $image_list = json_decode($product->image_list);
                $relatedProducts = Product::where('cat_id', $product->cat_id)->limit(12)->get()->except($product->id);
                $featureArticles = Article::where('status', 1)->where('is_feature', 1)->limit(5)->get();

                return view('pages.user.product.detail', [
                    'product' => $product,
                    'image_list' => $image_list,
                    'relatedProducts' => $relatedProducts,
                    'featureArticles' => $featureArticles
                ]);
            }
        } else {
            $products = Product::where('cat_id', $category->id)->get();

            return view('pages.user.product.detail-cate', [
                'results' => $products,
                'cate' => $category
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