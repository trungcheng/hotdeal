<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Article;
use App\Util\Util;
use Response;

class CategoryController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.category.index');
    }

    public function getAllCategories(Request $request)
    {
    	$categories = Category::all();

        if (!empty($categories)) {
            $results = Category::init($request);

            foreach ($results as $result) {
                if ($result->parent_id !== 0) {
                    $result['parent'] = Category::find($result->parent_id)->name;
                }
            }
            
            return Response::json(['status' => true, 'data' => $results]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function getAllParentCates(Request $request)
    {
        $types = [];
        if (isset($request->type)) {
            $types = explode(',', $request->type);
            $categories = Category::whereIn('type', $types)->orderBy('id', 'asc')->get();
        } else {
            $categories = Category::all();
        }
        $categoriesPaged = Util::buildArray($categories->toArray());
        if ($categoriesPaged) {
            return Response::json(['status' => true, 'data' => $categoriesPaged]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function add(Request $request)
    {
        try {
            $data = $request->only(['cateName', 'cateParent', 'cateType', 'selectedOptionStatus']);
            foreach ($data as $key => $value) {
                if (!isset($data[$key]) || $value == '' || is_null($value) || $value == "0") {
                    return Response::json([
                        'status' => false,
                        'message' => $key.' is required', 
                        'type' => 'error'
                    ]);
                }
            }

            Category::addAction($data);

            return Response::json([
                'status' => true, 
                'message' => 'Thêm danh mục thành công', 
                'type' => 'success'
            ]);
        } catch (Exception $e) {
            return Response::json([
                'status' => false, 
                'message' => $e->getMessage(), 
                'type' => 'error'
            ]);
        }
    }

    public function update(Request $request)
    {
        try {
            $data = $request->only(['cateId', 'cateName', 'cateParent', 'cateType', 'selectedOptionStatus']);
            foreach ($data as $key => $value) {
                if (!isset($data[$key]) || $value == '' || is_null($value) || $value == "0") {
                    return Response::json([
                        'status' => false, 
                        'message' => $key.' is required', 
                        'type' => 'error'
                    ]);
                }
            }

            $cate = Category::find($data['cateId']);
            if ($cate) {
                if ($data['cateType'] != $cate->type) {
                    $parentCate = Category::find($cate->parent_id);
                    if ($parentCate) $parentCate->update(['type' => $data['cateType']]);      
                }
                Category::updateAction($cate, $data);

                return Response::json([
                    'status' => true, 
                    'message' => 'Cập nhật danh mục thành công',
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy danh mục', 
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            return Response::json([
                'status' => false, 
                'message' => $e->getMessage(), 
                'type' => 'error'
            ]);
        }
    }

    public function delete(Request $request)
    {
        $cateId = $request->cateId;
        if ($cateId && !is_null($cateId)) {
            $cate = Category::find($cateId);
            if ($cate) {
                // remove all relate section
                Category::where('parent_id', $cateId)->delete();
                Product::where('cat_id', $cateId)->delete();
                Article::where('cat_id', $cateId)->delete();
                // remove itself
                $cate->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa danh mục thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy danh mục', 
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