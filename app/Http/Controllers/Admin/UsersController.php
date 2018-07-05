<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
            //var_dump($results); die();      
            return Response::json(['status' => true, 'data' => $results]);
        }

        return Response::json(['status' => false, 'data' => []]);
    }

    public function add(Request $request)
    {
        $data = $request->only(['cateName', 'cateParent', 'cateSlug', 'selectedOptionStatus', 'selectedOptionLocation']);
        if ($data) {
            User::addAction($data);
            return Response::json([
                'status' => true, 
                'message' => 'Thêm danh mục thành công', 
                'type' => 'success'
            ]);
        }

        return Response::json([
            'status' => false, 
            'message' => 'Data invalid', 
            'type' => 'error'
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->only(['cateId', 'cateName', 'cateParent', 'cateSlug', 'selectedOptionStatus', 'selectedOptionLocation']);
        if ($data) {
            User::updateAction($data);
            return Response::json([
                'status' => true, 
                'message' => 'Cập nhật danh mục thành công', 
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
        $cateId = $request->cateId;
        if ($cateId && !is_null($cateId)) {
            $cate = User::find($cateId);
            if ($cate) {
                $cate->delete();
                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa danh mục thành công', 
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