<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Article;
use App\Models\Review;

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
                
                $relatedProducts = Product::where('cat_id', $product->cat_id)
                    ->where('status', 1)
                    ->limit(8)
                    ->get()
                    ->except($product->id);

                // $featureArticles = Article::where('status', 1)
                //     ->where('is_feature', 1)
                //     ->where('status', 1)
                //     ->limit(5)
                //     ->get();

                return view('pages.user.product.detail', [
                    'product' => $product,
                    'image_list' => $image_list,
                    'reviews' => $reviews,
                    'averageReview' => round($averageReview, 1),
                    'relatedProducts' => $relatedProducts
                    // 'featureArticles' => $featureArticles
                ]);
            }
        } else {
            $data = $request->all();

            $products = Product::where('status', 1);

            if ($request->has('order')) {
                $filter = $data['order'];
                $filters = explode('-', $data['order']);
                $products->orderBy($filters[0], $filters[1]);
            } else {
                $products->orderBy('created_at', 'desc');
            }

            if ($category->parent_id == 0) {
                $childCates = Category::where('parent_id', $category->id)->get();
                if (!empty($childCates)) {
                    $arr = [];
                    foreach ($childCates as $child) {
                        $arr[] = $child->id;
                    }
                    $products->whereIn('cat_id', $arr);
                }
            } else {
                $products->where('cat_id', $category->id);
            }

            $results = $products->paginate(12);

            return view('pages.user.product.store', [
                'results' => $results,
                'cateName' => $category->name,
                'cate' => $category
            ]);
        }

        abort(404);
    }

    // public function store(Request $request)
    // {
    //     // $conditions = [];
    //     $data = $request->all();

    //     $products = Product::where('id', '>', 0)->where('status', 1);
    //     // $brands = Category::all();

    //     // if ($request->has('br')) {
    //     //     $products->whereIn('cat_id', $data['br']);
    //     //     foreach ($brands as $brand) {
    //     //         if (in_array($brand->id, $data['br'])) {
    //     //             $conditions[] = $brand->name;
    //     //         }
    //     //     }
    //     // }

    //     // if ($request->has('pr')) {
    //     //     $arr = [];
    //     //     $final = [];
    //     //     foreach ($data['pr'] as $pr) {
    //     //         $prs = explode('-', $pr);
    //     //         $final = array_merge($arr, $prs);
    //     //         $conditions[] = $pr;
    //     //     }
    //     //     $products->whereBetween('price_sale', [min($final), max($final)]);
    //     // }

    //     if ($request->has('order')) {
    //         $filter = $data['order'];
    //         $filters = explode('-', $data['order']);
    //         $products->orderBy($filters[0], $filters[1]);
    //     } else {
    //         $products->orderBy('created_at', 'desc');
    //     }

    //     $results = $products->paginate(12);

    //     return view('pages.user.product.store', [
    //         // 'conditions' => $conditions,
    //         // 'brands' => $brands,
    //         'results' => $results,
    //         'cateName' => 'Tất cả sản phẩm',
    //         'cate' => null
    //     ]);

    // }

    public function search(Request $request)
    {
        if ($request->exists('query')) {
            $query = $request->get('query') ? $request->get('query') : '';  
            $products = Product::where('id', '>', 0)->where('status', 1);
                
            if ($request->has('order')) {
                $filter = $data['order'];
                $filters = explode('-', $data['order']);
                $products->orderBy($filters[0], $filters[1]);
            } else {
                $products->orderBy('created_at', 'desc');
            }

            $results = $products
                ->where('name', 'LIKE', '%'.$query.'%')
                ->paginate(12);

            return view('pages.user.product.store', [
                'results' => $results,
                'cateName' => 'Tìm kiếm sản phẩm với từ khóa "' . $query . '"',
                'cate' => null
            ]);    
        }
        
        abort(404);
    }

}