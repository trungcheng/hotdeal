<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Response;

class UsersController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.users.index');
    }

    public function getAllUsers(Request $request)
    {
    	$users = User::all();
        if (!empty($users)) {
            $results = User::init($request);
            return Response::json(['status' => true, 'data' => $results]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function getAllRole(Request $request) 
    {
        $role = Role::where('id','>', 0)->get();
        if (!empty($role)) {
            return Response::json(['status' => true, 'data' => $role]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public static $rules = [
        'email' => 'required|email|unique:users',
        'username' => 'required|min:3|string|max:150|alpha_num|unique:users',
        'password' => 'min:6|required',
        'fullname' => 'required|min:3|',
        'permission' => 'required|numeric|min:1|',
        'mobile' => 'required|numeric|digits_between:10,11|unique:users'
    ];

    public static $messages = [
        'email.required' => 'Địa chỉ email không được để trống',
        'email.email' => 'Địa chỉ email chưa đúng định dạng',
        'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống',
        'username.alpha_num' => 'Username phải viết liền và sử dụng chữ không dấu',
        'username.required' => 'Username không được để trống',
        'username.min' => 'Username ít nhất 3 ký tự trở lên',
        'username.unique' => 'Username đã tồn tại trong hệ thống',
        'password.required' => 'Mật khẩu không được để trống',
        'password.min' => 'Mật khẩu ít nhất 6 ký tự trở lên',
        'mobile.required' => 'Số điện thoại không được để trống',
        'mobile.digits_between' => 'Số điện thoại phải 10 hoặc 11 số ',
        'mobile.numeric' => 'Số điện thoại chỉ được nhập số',
        'mobile.unique' => 'Số điện thoại đã tồn tại trong hệ thống',
        'fullname.required' => 'Họ tên không được để trống',
        'fullname.min' => 'Họ tên phải ít nhất 3 ký tự',
        'permission.min' => 'Bạn phải chọn quyền cho user',
    ];

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), self::$rules, self::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->only(['username', 'fullname', 'password', 'email', 'mobile', 'selectedOptionStatus', 'permission']);
            if ($data) {
                User::addAction($data);
                return Response::json([
                    'status' => true, 
                    'message' => 'Thêm user thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Data invalid', 
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
        $data = $request->only(['userId', 'username', 'fullname', 'password', 'email', 'mobile', 'selectedOptionStatus', 'permission']);
        if ($data) {
            User::updateAction($data);
            return Response::json([
                'status' => true, 
                'message' => 'Cập nhật user thành công', 
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
                'message' => 'User not found', 
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