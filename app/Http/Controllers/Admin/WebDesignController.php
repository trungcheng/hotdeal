<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataService;
use App\Models\User;
use Response;
use Validator;

class WebDesignController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.service.web-design.index');
    }

    public function getAllServices(Request $request)
    {
        $results = DataService::init(1, $request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function create(Request $request)
    {
        return view('pages.admin.service.web-design.add', [

        ]);
    }

    public function edit(Request $request, $id)
    {
        $service = DataService::find($id);
        if ($service) {
            return view('pages.admin.service.web-design.edit', [
                'service' => $service
            ]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), DataService::$rules_add, DataService::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                DataService::addAction($data);

                return Response::json([
                    'status' => true,
                    'message' => 'Thêm dịch vụ thành công', 
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
            $validator = Validator::make($request->all(), DataService::$rules_update, DataService::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $service = DataService::find($data['id']);
                if ($service) {
                    DataService::updateAction($data, $service);

                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật dịch vụ thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy dịch vụ', 
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
        $serviceId = $request->serviceId;
        if ($serviceId && !is_null($serviceId)) {
            $service = DataService::find($serviceId);
            if ($service) {
                $service->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa dịch vụ thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy dịch vụ', 
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