<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Util\Util;
use App\Traits\UploadTrait;
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
        if ($results) {
            foreach ($results as $result) {
                if ($result->category->parent_id > 0) {
                    $result->parentCate = Category::find($result->category->parent_id)->name;
                } else {
                    $result->parentCate = null;
                }
            }
        }
            
        return Response::json(['status' => true, 'data' => $results], 200, [], JSON_NUMERIC_CHECK);
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

        return response()->view('errors.404-Backend');
    }

    public function add(Request $request)
    {
        try {
            if ($request->hasFile('video')) {
                $rulesUserUpdate = [
                    'avatar' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
                    'video' => 'mimes:mp4|max:2048'
                ];
            }else{
                $rulesUserUpdate = [
                    'avatar' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048'
                ];
            }

            $validator = Validator::make($request->all(), $rulesUserUpdate, User::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            unset($data['cvideo']);
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/');
                $image->move($destinationPath, $name);
                $link_avatar = '/uploads/'.$name;
                $data['avatar'] = $link_avatar;
            }

            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $name = time().'.'.$video->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/videos/');
                $video->move($destinationPath, $name);
                $link_video = '/uploads/video/'.$name;
                $data['video'] = $link_video;
            }

            if ($data) {
                User::addMember($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm nhân vật thành công', 
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
            unset($data['cvideo']);
            if ($data) {
                $member = User::find($data['id']);
                if ($member) {
                    if ($request->hasFile('avatar')) {
                        $image = $request->file('avatar');
                        $name = time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/uploads/');
                        $image->move($destinationPath, $name);
                        $link_avatar = '/uploads/'.$name;
                        $data['avatar'] = $link_avatar;
                    }

                    if ($request->hasFile('video')) {
                        $video = $request->file('video');
                        $name = time().'.'.$video->getClientOriginalExtension();
                        $destinationPath = public_path('/uploads/videos/');
                        $video->move($destinationPath, $name);
                        $link_video = '/uploads/video/'.$name;
                        $data['video'] = $link_video;
                    }

                    User::updateMember($data, $member);
                    return Response::json([
                        'status' => true, 
                        'message' => 'Cập nhật nhân vật thành công', 
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy nhân vật', 
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
                $mem->userRound()->delete();
                $mem->memberHistory()->delete();
                // remove itself
                $mem->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa nhân vật thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy nhân vật', 
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