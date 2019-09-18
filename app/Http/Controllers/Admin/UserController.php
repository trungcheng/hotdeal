<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Util\Util;
use Response;
use Validator;

class UserController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.user.index');
    }

    public function getAllUsers(Request $request)
    {
        $results = User::initUser($request);
            
        return Response::json(['status' => true, 'data' => $results], 200, [], JSON_NUMERIC_CHECK);
    }

    public function create(Request $request)
    {
        return view('pages.admin.user.add');
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            return view('pages.admin.user.edit', ['user' => $user]);
        }

        return response()->view('errors.404-Backend');
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), User::$rulesUserAdd, User::$messagesUserAdd);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                User::addUser($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm user thành công', 
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
            $validator = Validator::make($request->all(), User::$rulesUserUpdate, User::$messagesUserUpdate);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $user = User::find($data['id']);
                if ($user) {
                    User::updateUser($data, $user);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật user thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy user', 
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
        $userId = $request->userId;
        if ($userId && !is_null($userId)) {
            $user = User::find($userId);
            if ($user) {
                $user->userHistory()->delete();
                $user->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa user thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy user', 
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