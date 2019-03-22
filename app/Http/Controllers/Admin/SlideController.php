<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Slide;
use Response;
use Validator;

class SlideController extends Controller
{

    public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.slide.index');
    }

    public function getAllSlides(Request $request)
    {
        $slides = Slide::all();

        if (!empty($slides)) {
            $results = Slide::init($request);
            
            return Response::json(['status' => true, 'data' => $results]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function loadObject(Request $request, $target)
    {
        if ($target == 'product') {
            $results = Product::select('id', 'name')->get();
        } else {
            $results = Article::select('id', 'title as name')->get();
        }

        return Response::json($results);
    }

    public function create(Request $request)
    {
        $products = Product::all();

        return view('pages.admin.slide.add', [
            'products' => $products
        ]);
    }

    public function edit(Request $request, $id)
    {
        $slide = Slide::find($id);
        if ($slide) {
            if ($slide->target_type == 'product') {
                $results = Product::select('id', 'name')->get();
            } else {
                $results = Article::select('id', 'title as name')->get();
            }

            return view('pages.admin.slide.edit', [
                'slide' => $slide,
                'results' => $results
            ]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Slide::$rules, Slide::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                Slide::addAction($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm slide thành công', 
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
            $validator = Validator::make($request->all(), Slide::$rules, Slide::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $slide = Slide::find($data['id']);
                if ($slide) {
                    Slide::updateAction($data, $slide);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật slide thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy slide', 
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
        $slideId = $request->slideId;
        if ($slideId && !is_null($slideId)) {
            $slide = Slide::find($slideId);
            if ($slide) {
                $slide->delete();
                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa slide thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy slide', 
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