<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRound;
use App\Models\Round;
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
            
        return Response::json(['status' => true, 'data' => $results], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getAllUserRounds(Request $request)
    {
        $results = Round::getAllUserByRound($request);
            
        return Response::json(['status' => true, 'data' => $results], 200, [], JSON_NUMERIC_CHECK);
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

    public function view(Request $request, $id)
    {
        $round = Round::find($id);
        if ($round) {
            $runningRound = Round::where('is_running', 1)
            	->where('id', '<>', $round->id)->first();

            return view('pages.admin.round.view', [
                'round' => $round,
                'runningRound' => $runningRound
            ]);
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
                $cb = Round::addAction($data);
                
                return Response::json([
                    'status' => $cb['status'],
                    'message' => $cb['message'],
                    'type' => $cb['type']
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
                'message' => $e->getMessage(),
                'type' => 'error'
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
                    $cb = Round::updateAction($data, $round);
                    
                    return Response::json([
                        'status' => $cb['status'],
                        'message' => $cb['message'],
                        'type' => $cb['type']
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
                'message' => $e->getMessage(),
                'type' => 'error'
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

    public function deleteUserRound(Request $request)
    {
        $roundId = $request->roundId;
        $members = $request->members;
        if ($roundId && $members && !is_null($roundId)) {
            $round = Round::find($roundId);
            if ($round) {
                UserRound::whereIn('user_id', $members)
                	->where('round_id', $roundId)->delete();

                return Response::json([
                    'status' => true, 
                    'message' => 'Xóa nhân vật đã chọn thành công', 
                    'type' => 'success'
                ]);
            }

            return Response::json([
                'status' => false, 
                'message' => 'Không tìm thấy vòng thi hoặc danh sách nhân vật xóa trống', 
                'type' => 'error'
            ]);
        }

        return Response::json([
            'status' => false, 
            'message' => 'Đã xảy ra lỗi', 
            'type' => 'error'
        ]);
    }

    public function submitSelectMode(Request $request)
    {
    	try {
	    	$data = $request->all();
	    	if ($data['currentRoundId'] && $data['runningRoundId'] && $data['mode']) {
	    		$currentRound = Round::find($data['currentRoundId']);
	    		$runningRound = Round::find($data['runningRoundId']);

	    		if ($currentRound && $runningRound) {
	    			if ($data['mode'] == '1') {
	    				if (count($data['selectedMembers']) > 0) {
	    					UserRound::where('round_id', $currentRound->id)->update(['is_selected' => 0]);
	    					UserRound::where('round_id', $runningRound->id)->delete();
		    				foreach ($data['selectedMembers'] as $memId) {
		    					$userRound = UserRound::where('user_id', $memId)
		    						->where('round_id', $currentRound->id)->first();
	    						UserRound::create([
	    							'user_id' => $memId,
	    							'round_id' => $runningRound->id,
	    							'vote' => ($runningRound->is_reset_vote) ? 0 : $userRound->vote,
	    							'is_selected' => 0
	    						]);
	    						$userRound->update(['is_selected' => 1]);
	    					}
    					}
	    			}
	    			
	    			if ($data['mode'] == '2') {
	    				$userCurrentRound = UserRound::where('round_id', $currentRound->id)
	    					->orderBy('vote', 'desc')->limit($currentRound->user_select_count)->get();
	    				if ($userCurrentRound) {
	    					UserRound::where('round_id', $currentRound->id)->update(['is_selected' => 0]);
	    					UserRound::where('round_id', $runningRound->id)->delete();
	    					foreach ($userCurrentRound as $user) {
	    						UserRound::create([
	    							'user_id' => $user->user_id,
	    							'round_id' => $runningRound->id,
	    							'vote' => ($runningRound->is_reset_vote) ? 0 : $user->vote,
	    							'is_selected' => 0
	    						]);
	    					}
	    					UserRound::where('round_id', $currentRound->id)
	    						->orderBy('vote', 'desc')->limit($currentRound->user_select_count)
	    						->update(['is_selected' => 1]);
	    				}
	    			}

	    			return Response::json([
	                    'status' => true, 
	                    'message' => 'Chuyển nhân vật thành công', 
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
	    } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'type' => 'error'
            ], 200);
        }
    }
}