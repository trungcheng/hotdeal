<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
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
        $categories = Category::where('parent_id', 0)->get();

        if (!empty($categories)) {
            foreach ($categories as $result) {
                $result['childs'] = [];
                $result['childs'] = Category::where('parent_id', $result->id)->get();
            }
            
            return Response::json(['status' => true, 'data' => $categories]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function add(Request $request)
    {
        $data = $request->only(['cateName', 'cateParent', 'cateSlug', 'selectedOptionStatus', 'selectedOptionLocation']);
        if ($data) {
            Category::addAction($data);
            return Response::json([
                'status' => true, 
                'message' => 'Thêm danh mục thành công', 
                'type' => 'success'
            ]);
        }

        return Response::json([
            'status' => false, 
            'message' => 'Data invalid', 
            'type' => 'error'
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->only(['cateId', 'cateName', 'cateParent', 'cateSlug', 'selectedOptionStatus', 'selectedOptionLocation']);
        if ($data) {
            Category::updateAction($data);
            return Response::json([
                'status' => true, 
                'message' => 'Cập nhật danh mục thành công', 
                'type' => 'success'
            ]);
        }

        return Response::json([
            'status' => false, 
            'message' => 'Data invalid', 
            'type' => 'error'
        ]);
    }

    public function delete(Request $request)
    {
        $cateId = $request->cateId;
        if ($cateId && !is_null($cateId)) {
            $cate = Category::find($cateId);
            if ($cate) {
                $cate->delete();
                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa danh mục thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Category not found', 
                'type' => 'error'
            ]);
        }

        return Response::json([
            'status' => false, 
            'message' => 'Data invalid', 
            'type' => 'error'
        ]);
    }
}