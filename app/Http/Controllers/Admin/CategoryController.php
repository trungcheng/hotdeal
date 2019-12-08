<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Util\Util;
use Response;
use Validator;

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
        $results = Category::init($request);
        if ($results) {
            foreach ($results as $result) {
                if ($result->parent_id !== 0) {
                    if (Category::find($result->parent_id)) {
                        $result['parent'] = Category::find($result->parent_id)->name;
                    }
                }
            }
        }
        
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function getAllParentCates(Request $request)
    {
        $ids = [];
        if (isset($request->ids)) {
            $ids = explode(',', $request->ids);
            $categoriesPaged = Category::whereIn('id', $ids)->get();
        } else {
            $categories = Category::orderBy('order', 'asc')->get();
            $categoriesPaged = Util::buildArray($categories);
        }
        if ($categoriesPaged) {
            return Response::json(['status' => true, 'data' => $categoriesPaged]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function create(Request $request)
    {
        return view('pages.admin.category.add');
    }

    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('pages.admin.category.edit', ['category' => $category]);
        }

        return response()->view('errors.404-Backend');
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Category::$rules, Category::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
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
            $validator = Validator::make($request->all(), Category::$rules, Category::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $category = Category::find($data['id']);
                if ($category) {
                    Category::updateAction($category, $data);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật danh mục thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy danh mục', 
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
        $cateId = $request->cateId;
        if ($cateId && !is_null($cateId)) {
            $cate = Category::find($cateId);
            if ($cate) {
                if (!in_array($cate->id, [19,20])) {
                    // remove all relate section
                    User::where('cat_id', $cateId)->update(['cat_id' => 0]);
                    // remove itself
                    $cate->delete();

                    return Response::json([
                        'status' => true, 
                        'message' => 'Xóa danh mục thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false, 
                        'message' => 'Không thể xóa danh mục này', 
                        'type' => 'error'
                    ]);
                }
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