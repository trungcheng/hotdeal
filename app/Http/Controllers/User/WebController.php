<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use App\Util\Util;
use Response;
use Session;
use DB;

class WebController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function processPage(Request $request, $slug) {
        if ($slug == 'admin') {
            return redirect('/admin/access/login');
        }
        $category = DB::table('categories')->where('slug', $slug)->where('status', 1)->first();
        if($category) {
            $users = DB::table('users')->select('id', 'full_name', 'avatar', 'intro', 'total_vote')->where('cat_id', $category->id)->where('role_id', 3)->where('status', 1)->get();
            $round = DB::table('rounds')->where('is_running', 1)->first();
            $i = 0;
            $list = array();
            foreach ($users as $user) {
                $list[$i]['id']         = $user->id;
                $list[$i]['full_name']  = $user->full_name;
                $list[$i]['avatar']     = $user->avatar;
                $list[$i]['intro']      = $user->intro;
                $list[$i]['total_vote'] = $user->total_vote;

                $vote_today = $this->check_vote_today(3, $user->id);
                if($vote_today){
                    $list[$i]['vote_today'] = 1;
                }else{
                    $list[$i]['vote_today'] = 0;
                }
                $i++;
            }
            return view('pages.user.post.category', [
                'cate' => $category,
                'data' => $list
            ]);
        }else{
            $user = DB::table('users')->where('id', $slug)->where('status', 1)->first();
            if($user) {
                $vote_today = $this->check_vote_today(3, $user->id);
                if($vote_today){
                    $user->vote_today = 1;
                }else{
                    $user->vote_today = 0;
                }

                $category = DB::table('categories')->where('id', $user->cat_id)->where('status', 1)->first();
                $parent = DB::table('categories')->where('id', $category->parent_id)->where('status', 1)->first();
                return view('pages.user.post.detail', [
                    'cate' => $category,
                    'parent' => $parent,
                    'data' => $user
                ]);
            }else{// 404
                return view('pages.user.post.404', [
                ]);
            }
        }
    }

    public function voteMember(Request $request){
        try {
            $data = $request->all();
            if ($data && isset($data['user']) && isset($data['vote'])) {
                
                $user_vote = $data['user'];
                $vote_for  = $data['vote'];

                $check_user_vote = DB::table('users')->where('id', $user_vote)->first();
                if($check_user_vote){
                    $vote_today = $this->check_vote_today($user_vote, $vote_for);
                    if($vote_today){
                        return Response::json(['status' => false, 'message' => 'Vui lòng bình chọn cho thành viên này vào ngày mai.']);
                    }else{
                        //insert table history
                        $round = DB::table('rounds')->where('is_running', 1)->first();
                        DB::table('history')->insert([
                            'round_id'   => $round->id, 
                            'user_vote'  => $user_vote,
                            'vote_for'   => $vote_for,
                            'vote_count' => 1
                        ]);

                        //update table users
                        $user = DB::table('users')->where('id', $vote_for)->first();
                        $total = $user->total_vote + 1;
                        DB::table('users')->where('id', $vote_for)->update(['total_vote' => $total]);

                        //update table user_round
                        $user_round = DB::table('user_round')->where('user_id', $vote_for)->where('round_id', $round->id)->first();
                        if($user_round){
                           $total_vote = $user_round->vote + 1;
                            DB::table('user_round')->where('user_id', $vote_for)->where('round_id', $round->id)->update(['vote' => $total_vote]); 
                        }

                        return Response::json(['status' => true, 'message' => 'Bình chọn thành công', 'name' => $user->full_name, 'position'=> $user->intro]);
                    }
                }else{
                    return Response::json(['status' => false, 'message' => 'Không tồn tại người dùng này.']);
                }
            }
        } catch (Exception $e) {
            return Response::json(['status' => false, 'message' => 'Xảy ra lỗi trong quá trình bình chọn.']);
        }
    }

    public function check_vote_today($user_vote, $vote_for){
        $check_vote_today = DB::table('history')->where('user_vote', $user_vote)
                                                        ->where('vote_for', $vote_for)
                                                        ->where('created_at', '>=', date('Y-m-d 00:00:00'))
                                                        ->where('created_at', '<=', date('Y-m-d 23:59:59'))
                                                        ->first();
        if($check_vote_today){
            return true;
        }else{
            return false;
        }
    }

}