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
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function delete(Request $request)
    {
        $userId = $request->userId;
        if ($userId && !is_null($userId)) {
            $user = User::find($userId);
            if ($user) {
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