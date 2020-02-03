<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Response;
use Validator;

class OrderController extends Controller
{

    public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.order.index');
    }

    public function getAllOrders(Request $request)
    {
        $results = Order::init($request);
        foreach ($results as $result) {
            switch ($result->status) {
                case 0:
                    $result->status = 'Chờ xử lý';
                    break;
                case 1:
                    $result->status = 'Đang giao đang xử lý';
                    break;
                case 2:
                    $result->status = 'Đã giao chưa thanh toán';
                    break;
                case 3:
                    $result->status = 'Đã giao đã thanh toán';
                    break;
                default:
                    $result->status = 'Bị trả lại';
            }
        }
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function create(Request $request)
    {
        return view('pages.admin.order.add');
    }

    public function edit(Request $request, $id)
    {
        $order = Order::find($id);
        if ($order) {
            $customerInfo = json_decode($order->obj_info);
            $orderDetails = OrderDetail::where('order_id', $order->id)->get();

            return view('pages.admin.order.edit', [
                'order' => $order,
                'orderDetails' => $orderDetails,
                'customerInfo' => $customerInfo
            ]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Order::$rules, Order::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                Order::addAction($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm đơn đặt hàng thành công', 
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
            // $validator = Validator::make($request->all(), Order::$rules, Order::$messages);
            // if ($validator->fails()) {
            //     return Response::json([
            //         'status' => false,
            //         'message' => $validator->messages()->first(),
            //         'type' => 'error'
            //     ]);
            // }

            $data = $request->all();
            if ($data) {
                $order = Order::find($data['id']);
                if ($order) {
                    Order::updateAction($data, $order);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật đơn đặt hàng thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy đơn đặt hàng', 
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
        $orderId = $request->orderId;
        if ($orderId && !is_null($orderId)) {
            $order = Order::find($orderId);
            if ($order) {
                $order->delete();
                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa đơn đặt hàng thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy đơn đặt hàng', 
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