<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use App\Util\Util;
use Response;
use Validator;

class ReviewController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.review.index');
    }

    public function getAllReviews(Request $request)
    {
        $results = Review::init($request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function create(Request $request)
    {
    	$products = Product::where('status', 1)->orderBy('id', 'desc')->get();

        return view('pages.admin.review.add', [
        	'products' => $products
        ]);
    }

    public function edit(Request $request, $id)
    {
        $review = Review::find($id);
        $products = Product::where('status', 1)->orderBy('id', 'desc')->get();

        if ($review) {
            return view('pages.admin.review.edit', [
            	'review' => $review,
            	'products' => $products
            ]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Review::$rules, Review::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            unset($data['_token']);

            if ($data) {
                Review::addAction($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm đánh giá thành công', 
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
            $validator = Validator::make($request->all(), Review::$rules, Review::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $review = Review::find($data['id']);
                if ($review) {
                    Review::updateAction($data, $review);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật đánh giá thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy đánh giá', 
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
        $reviewId = $request->reviewId;
        if ($reviewId && !is_null($reviewId)) {
            $review = Review::find($reviewId);
            if ($review) {
                // remove itself
                $review->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa đánh giá thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy đánh giá', 
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