<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Util\Util;
use Response;
use Validator;

class MemberController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.member.index');
    }

    public function getAllMembers(Request $request)
    {
        $results = User::init($request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function create(Request $request)
    {
        return view('pages.admin.member.add');
    }

    public function edit(Request $request, $id)
    {
        $member = User::find($id);
        if ($member) {
            return view('pages.admin.member.edit', ['member' => $member]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), User::$rules, User::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                User::addAction($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm thành viên thành công', 
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
            $validator = Validator::make($request->all(), User::$rules, User::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $member = User::find($data['id']);
                if ($member) {
                    User::updateAction($data, $member);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật thành viên thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy thành viên', 
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
        $memId = $request->memId;
        if ($memId && !is_null($memId)) {
            $mem = User::find($memId);
            if ($mem) {
                // remove all relate section
                $mem->article()->delete();
                $mem->product()->delete();
                $mem->order()->delete();
                // remove itself
                $mem->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa thành viên thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy thành viên', 
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