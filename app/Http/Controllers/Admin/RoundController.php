<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Round;
use App\Models\User;
use App\Models\UserRound;
use App\Util\Util;
use Response;
use Validator;

class RoundController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.round.index');
    }

    public function getAllRounds(Request $request)
    {
        $results = Round::init($request);
            
        return Response::json(['status' => true, 'data' => $results]);
    }

    public function create(Request $request)
    {
        return view('pages.admin.round.add');
    }

    public function edit(Request $request, $id)
    {
        $round = Round::find($id);
        if ($round) {
            return view('pages.admin.round.edit', ['round' => $round]);
        }

        abort(404);
    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), Round::$rules, Round::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                Round::addAction($data);
                return Response::json([
                    'status' => true,
                    'message' => 'Thêm vòng thi thành công', 
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
            $validator = Validator::make($request->all(), Round::$rules, Round::$messages);
            if ($validator->fails()) {
                return Response::json([
                    'status' => false,
                    'message' => $validator->messages()->first(),
                    'type' => 'error'
                ]);
            }

            $data = $request->all();
            if ($data) {
                $round = Round::find($data['id']);
                if ($round) {
                    $userRound = UserRound::where('round_id', $round->id)->get();
                    if ($userRound) {
                        if ($data['user_select_count'] < $userRound->count()) {
                            return Response::json([
                                'status' => false,
                                'message' => 'Số người lựa chọn đã nhỏ hơn số người hiện tại', 
                                'type' => 'error'
                            ]);
                        }
                    }
                    Round::updateAction($data, $round);
                    return Response::json([
                        'status' => true,
                        'message' => 'Cập nhật vòng thi thành công',
                        'type' => 'success'
                    ]);
                } else {
                    return Response::json([
                        'status' => false,
                        'message' => 'Không tìm thấy vòng thi', 
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
        $roundId = $request->roundId;
        if ($roundId && !is_null($roundId)) {
            $round = Round::find($roundId);
            if ($round) {
                // remove all relate section
                $round->user_round()->delete();
                $round->history()->delete();
                // remove itself
                $round->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa vòng thi thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy vòng thi', 
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