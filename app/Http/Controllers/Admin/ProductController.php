<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Response;
use Validator;

class ProductController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.product.index');
    }

    public function getAllProducts(Request $request)
    {
    	$products = Product::all();

        if (!empty($products)) {
            $results = Product::init($request);
            
            return Response::json(['status' => true, 'data' => $results]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function create(Request $request)
    {
        $wires = file_get_contents(public_path('/frontend/json/wire-materials.json'));
        $glasses = file_get_contents(public_path('/frontend/json/glass-materials.json'));
        $energies = file_get_contents(public_path('/frontend/json/energy-types.json'));
        $versions = file_get_contents(public_path('/frontend/json/versions.json'));

        return view('pages.admin.product.add', [
            'wires' => json_decode($wires),
            'glasses' => json_decode($glasses),
            'energies' => json_decode($energies),
            'versions' => json_decode($versions)
        ]);
    }

    public function edit(Request $request, $id)
    {
        $pro = Product::find($id);
        if ($pro) {
            $wires = file_get_contents(public_path('/frontend/json/wire-materials.json'));
            $glasses = file_get_contents(public_path('/frontend/json/glass-materials.json'));
            $energies = file_get_contents(public_path('/frontend/json/energy-types.json'));
            $versions = file_get_contents(public_path('/frontend/json/versions.json'));
            if ($pro->image_list !== '') $pro->image_list = json_decode($pro->image_list);

            return view('pages.admin.product.edit', [
                'pro' => $pro,
                'wires' => json_decode($wires),
                'glasses' => json_decode($glasses),
                'energies' => json_decode($energies),
                'versions' => json_decode($versions)
            ]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Product::$rules, Product::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $thumbImage = '';
                if ($request->hasFile('image')) {
                    $thumbImage = $this->saveImage($request->file('image'), 'products/thumbs', ['width' => 500, 'height' => 600]);
                    // $thumbImage = /backend/uploads/products/thumbs/2019-03-30-05-02-48-omega-de-ville-46142002-8.jpg
                    $image = $this->saveImageWithoutResizeForThumb($request->file('image'), $thumbImage);
                    if (!$thumbImage || !$image) {
                        return Response::json([
                            'status' => false,
                            'message' => 'Không thể lưu ảnh thumbnail chính',
                            'type' => 'error'
                        ]);
                    }
                }
                $imageList = [];
                if(isset($data['image_list']) && count($data['image_list']) > 0) {
                    foreach ($data['image_list'] as $key => $image_upload) {
                        $imageName = '';
                        $imageName = $this->saveImageWithoutResize($image_upload, 'products');
                        if (!$imageName) {
                            return Response::json([
                                'status' => false,
                                'message' => 'Không thể lưu ảnh liên quan',
                                'type' => 'error'
                            ]);
                        }

                        $imageList[] = $imageName;
                    }
                }
                $data['image'] = $thumbImage;
                $data['image_list'] = $imageList;
                Product::addAction($data);

                return Response::json([
                    'status' => true,
                    'message' => 'Thêm sản phẩm thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Đã xảy ra lỗi', 
                'type' => 'error'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Product::$rules, Product::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $product = Product::find($data['id']);
                if ($product) {
                    Product::updateAction($data, $product);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật sản phẩm thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy sản phẩm', 
                        'type' => 'error'
                    ]);
                }
            }

            return Response::json([
                'status' => false,
                'message' => 'Đã xảy ra lỗi', 
                'type' => 'error'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function delete(Request $request)
    {
        $proId = $request->proId;
        if ($proId && !is_null($proId)) {
            $product = Product::find($proId);
            if ($product) {
                $product->delete();
                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa sản phẩm thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy sản phẩm', 
                'type' => 'error'
            ]);
        }

        return Response::json([
            'status' => false, 
            'message' => 'Đã xảy ra lỗi', 
            'type' => 'error'
        ]);
    }
}