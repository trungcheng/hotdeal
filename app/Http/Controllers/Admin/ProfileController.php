<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Util\Util;
use Response;
use Validator;

class ProfileController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index(Request $request)
    {
    	$user = \Auth::guard('admin')->user();

        return view('pages.admin.user.profile', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
    	$data = $request->all();
    	unset($data['_token']);

    	$user = User::find($data['id']);
    	if ($user) {
    		$user->update($data);
    	}

        return redirect()->back()->with('message', 'Cập nhật thành công');
    }

    public function changePass(Request $request)
    {
    	$validator = Validator::make($request->all(), [
			'password'=>'min:6|required|confirmed',
        	'password_confirmation'=>'required_with:password'
		], [
			'password.required' => 'Mật khẩu mới không được để trống',
			'password.min' => 'Mật khẩu mới ít nhất 6 ký tự',
			'password.confirmed' => 'Mật khẩu không khớp'
		]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages()->first())->withInput();
        }

        $data = $request->all();
    	unset($data['_token']);
    	unset($data['password_confirmation']);

    	$user = User::find($data['id']);
    	if ($user) {
    		$user->update($data);
    	}

        return redirect()->back()->with('message', 'Cập nhật thành công');
    }

}