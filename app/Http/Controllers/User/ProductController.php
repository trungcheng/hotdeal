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
        $conditions = [];
        $data = $request->all();
        if (in_array($sex, ['m', 'f'])) {
            $brands = Category::all();
            $products = Product::where('sex', $sex);

            if ($request->has('br')) {
                $products->whereIn('cat_id', $data['br']);
                foreach ($brands as $brand) {
                    if (in_array($brand->id, $data['br'])) {
                        $conditions[] = $brand->name;
                    }
                }
            }

            if ($request->has('pr')) {
                // $products->whereBetween('cat_id', $data['pr']);
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
            }

            $results = $products->get();

            return view('pages.user.product.store', [
                'sex' => $sex,
                'brands' => $brands,
                'conditions' => $conditions,
                'results' => $results
            ]);
        }

        abort(404);
    }
}