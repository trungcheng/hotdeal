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
            $imageOriginal = str_replace('/thumbs', '', $product->image);
            $data = getimagesize(url($imageOriginal));
            $product->image_width = $data[0];
            $product->image_height = $data[1];

            $imageLists = [];
            $image_list = json_decode($product->image_list);
            if (count($image_list) > 0 && !is_null($image_list[0])) {
                foreach ($image_list as $key => $item) {
                    $data = getimagesize(url($item));
                    $imageLists[$key]['link'] = $item;
                    $imageLists[$key]['width'] = $data[0];
                    $imageLists[$key]['height'] = $data[1];
                }
            }

            $relatedProducts = Product::where('cat_id', $product->cat_id)->limit(12)->get()->except($product->id);

            return view('pages.user.product.detail', [
                'imageOriginal' => $imageOriginal,
                'product' => $product,
                'relatedProducts' => $relatedProducts,
                'imageLists' => $imageLists
            ]);
        }

        abort(404);
    }

    public function getAllFeatureProd(Request $request)
    {
        $products = Product::where('is_feature', 1);
        if ($request->sex != 'all') {
            $products->where('sex', $request->sex);
        }
        $products = $products->orderBy('created_at', 'desc')->paginate(12);
        $view = view('pages.user.product.product-by-sex', [
            'products' => $products
        ])->render();

        return response()->json([
            'status' => true,
            'html' => $view,
            'product' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage()
            ]
        ]);
    }

    public function getAllCateProd(Request $request)
    {
        $products = Product::where('cat_id', $request->catId)->orderBy('created_at', 'desc')->paginate(12);
        $view = view('pages.user.product.product-by-cate', [
            'products' => $products
        ])->render();

        return response()->json([
            'status' => true,
            'html' => $view,
            'product' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage()
            ]
        ]);
    }

    public function store(Request $request, $sex)
    {
        $conditions = [];
        $data = $request->all();
        if (in_array($sex, ['m', 'f', 's', 'c'])) {

            $brands = Category::all();
            $products = Product::where('id', '>', 0);
            
            if (!in_array($sex, ['s', 'c'])) {
                $products->where('sex', $sex);
            } else {
                if ($request->has('key')) {
                    $products->where(function ($query) use ($data) {
                        $query->where('name', 'LIKE', '%'.$data['key'].'%')
                              ->orWhere('sku_id', 'LIKE', '%'.$data['key'].'%');
                    });
                } else {
                    $data['key'] = '';
                }
            }

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
            if ($request->has('wm')) {
                $products->whereIn('wire_material', $data['wm']);
                $wires = file_get_contents(public_path('/frontend/json/wire-materials.json'));
                foreach (json_decode($wires) as $wire) {
                    if (in_array($wire->id, $data['wm'])) {
                        $conditions[] = $wire->name;
                    }
                }
            }
            if ($request->has('gm')) {
                $products->whereIn('glass_material', $data['gm']);
                $glasses = file_get_contents(public_path('/frontend/json/glass-materials.json'));
                foreach (json_decode($glasses) as $glass) {
                    if (in_array($glass->id, $data['gm'])) {
                        $conditions[] = $glass->name;
                    }
                }
            }
            if ($request->has('et')) {
                $products->whereIn('energy_type', $data['et']);
                $energies = file_get_contents(public_path('/frontend/json/energy-types.json'));
                foreach (json_decode($energies) as $energy) {
                    if (in_array($energy->id, $data['et'])) {
                        $conditions[] = $energy->name;
                    }
                }
            }
            if ($request->has('v')) {
                $products->whereIn('version', $data['v']);
                $versions = file_get_contents(public_path('/frontend/json/versions.json'));
                foreach (json_decode($versions) as $version) {
                    if (in_array($version->id, $data['v'])) {
                        $conditions[] = $version->name;
                    }
                }
            }
            if ($request->has('order')) {
                $filter = $data['order'];
                $filters = explode('-', $data['order']);
                if ($filter == 'name') {
                    $products->orderBy('name');
                } else {
                    $products->orderBy($filters[0], $filters[1]);
                }
            } else {
                $products->orderBy('created_at', 'desc');
            }

            $results = $products->paginate(12);

            return view(($sex != 'c') ? 'pages.user.product.store' : 'pages.user.product.brand-store', [
                'sex' => $sex,
                'brands' => $brands,
                'conditions' => $conditions,
                'results' => $results,
                'searchText' => ($sex == 's') ? $data['key'] : ''
            ]);
        } elseif ($sex == 'admin') {
            return redirect('/admin/login');
        }

        abort(404);
    }

}