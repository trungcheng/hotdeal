<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function ajaxSignIn(Request $request) {

    	$validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email hoặc số điện thoại không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->messages()->first(),
            ], 200);
        }

        if (is_numeric($request->get('email'))) {
            $data = ['mobile' => $request->get('email'),'password' => $request->get('password')];
        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            $data = ['email' => $request->get('email'), 'password' => $request->get('password')];
        }

        if (\Auth::attempt($data)) {
            return response()->json([
	        	'status' => true
	        ]);
        }

        return response()->json([
        	'status' => false,
        	'message' => 'Đăng nhập không thành công'
        ]);

    }
 
    public function ajaxSignUp(Request $request) {
    	
    	$validator = \Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|numeric|digits_between:10,11',
            'password' => 'required|min:6|max:32'
        ], [
            'fullname.required' => 'Họ tên không được để trống',
            'email.required' => 'Email hoặc số điện thoại không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'mobile.required' => 'Số điện thoại không được để trống',
            'mobile.numeric' => 'Số điện thoại phải là định dạng số',
            'mobile.digits_between' => 'Số điện thoại phải 10 hoặc 11 số',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->messages()->first(),
            ], 200);
        }

        $data = $request->all();
        $user = User::create([
            'role_id' => 3,
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => $data['password'],
            'mobile' => (isset($data['mobile']) && $data['mobile'] !== '') ? $data['mobile'] : '',
            'address' => (isset($data['address']) && $data['address'] !== '') ? $data['address'] : '',
            'is_confirmed' => 1
        ]);
        \Auth::login($user);
        if (\Auth::check()) {
        	return response()->json([
	        	'status' => true
	        ]);
        }

        return response()->json([
        	'status' => false,
        	'message' => 'Đăng nhập không thành công'
        ]);

    }

}