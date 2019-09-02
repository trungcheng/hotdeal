<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use App\Util\Util;
use Illuminate\Support\Facades\Auth;
use Response;
use Session;
use DB;

class WebController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function update_slug(){
        $users = DB::table('users')->select('id', 'full_name')->where('role_id', 3)->where('type', 1)->where('status', 1)->get();
            foreach ($users as $user) {
                DB::table('users')->where('id', $user->id)->update(['username' => str_slug($user->full_name, '-')]);
            }
    }

    public function gen_member(){
        $ho = ['Hoàng', 'Nguyễn', 'Trần', 'Lê', 'Đinh', 'Phan', 'Đào'];
        $dem = ['Thị', 'Văn', 'Khánh', 'Hương', 'Mạnh', 'Hoa', 'Thùy'];
        $ten = ['Hồng', 'Huyền', 'Tùng', 'Dũng', 'Linh', 'Tam', 'Anh', 'Quân', 'Lan', 'Hương', 'Dung'];
        $cate = [2, 3, 6, 7, 8, 9, 11, 12, 13, 14, 15, 16];
        $position = ['Trưởng Phòng', 'Nhân viên', 'Giám đốc', 'Leader', 'Công nhân', 'Bác sĩ', 'Quét rác'];
        $total_vote = [100, 200,300,400,500,600,700,800,150,210,321,489,587,639,825,111,621,522,301,980,268,751,486,624];
        $avatar = ['https://images.pexels.com/photos/61100/pexels-photo-61100.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/355164/pexels-photo-355164.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/206407/pexels-photo-206407.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/89790/beauty-woman-portrait-face-89790.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/604146/pexels-photo-604146.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/459947/pexels-photo-459947.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/458718/pexels-photo-458718.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/458766/pexels-photo-458766.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/247917/pexels-photo-247917.jpeg?h=350&auto=compress&cs=tinysrgb', 'https://images.pexels.com/photos/247885/pexels-photo-247885.jpeg?h=350&auto=compress&cs=tinysrgb'];
        for ($i=0; $i < 300 ; $i++) { 
            DB::table('users')->insert([
                'role_id'   => 3, 
                'cat_id'  => $cate[array_rand($cate)],
                'username'   => '',
                'total_vote'   => $total_vote[array_rand($total_vote)],
                'avatar'  => $avatar[array_rand($avatar)],
                'full_name'   => $ho[array_rand($ho)].' '.$dem[array_rand($dem)].' '.$ten[array_rand($ten)],
                'intro' => $position[array_rand($position)],
                'content' => '<ul><li>- Cung cấp dịch vụ tốt ngoài mong đợi.</li><li>- Kết quả đánh giá Quý đạt trên 80%.</li><li>- Có những sáng tạo hoặc cải tiến hiệu quả trong công việc.</li><li>- Thể hiện tốt các nguyên tắc văn hoá dịch vụ 4C - 4K.</li><li>- Có tinh thần giúp đỡ đồng nghiệp</li><li>- Tham gia đầy đủ các hoạt động cộng đồng trong công ty.</li></ul>',
                'type' => 1,
                'status' => 1
            ]);
        }
        echo 'done';
    }

    public function processPage(Request $request, $parent, $slug) {
        if(Auth::guard('user')->check()){
            $userId = Auth::guard('user')->id();
        }else{
            $userId = 0;
        }

        $round = DB::table('rounds')->where('is_running', 1)->first();
        if($round->visible_menu == 0){
            return view('pages.user.post.404', []);
        }

        $category = DB::table('categories')->where('slug', $slug)->where('status', 1)->first();
        if($category) {
            $users = DB::table('users')->select('id', 'username', 'full_name', 'avatar', 'intro', 'total_vote')->where('cat_id', $category->id)->where('role_id', 3)->where('status', 1)->get();
            $cate_parent = DB::table('categories')->where('id', $category->parent_id)->where('status', 1)->first();
            $round = DB::table('rounds')->where('is_running', 1)->first();
            $i = 0;
            $list = array();
            foreach ($users as $user) {
                $list[$i]['id']         = $user->id;
                $list[$i]['full_name']  = $user->full_name;
                $list[$i]['username']   = $user->username;
                $list[$i]['avatar']     = $user->avatar;
                $list[$i]['intro']      = $user->intro;
                $list[$i]['total_vote'] = $user->total_vote;

                $vote_today = $this->check_vote_today($userId, $user->id);
                if($vote_today){
                    $list[$i]['vote_today'] = 1;
                }else{
                    $list[$i]['vote_today'] = 0;
                }
                $i++;
            }
            return view('pages.user.post.category', [
                'cate' => $category,
                'parent' => $cate_parent,
                'data' => $list
            ]);
        }else{
            return view('pages.user.post.404', [
            ]);
        }
    }

    public function processPageMember(Request $request, $parent, $cate_child, $member) {
        if(Auth::guard('user')->check()){
            $userId = Auth::guard('user')->id();
        }else{
            $userId = 0;
        }

        $user = DB::table('users')->where('username', $member)->where('status', 1)->first();
        if($user) {
            $vote_today = $this->check_vote_today($userId, $user->id);
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

    public function roundsMember(Request $request, $slug) {
        if(Auth::guard('user')->check()){
            $userId = Auth::guard('user')->id();
        }else{
            $userId = 0;
        }

        $round = DB::table('rounds')->where('slug', $slug)->where('is_running', 1)->first();
        if($round){
            if($round->visible_menu == 1){
                return view('pages.user.post.404', []);
            }
        }else{
            return view('pages.user.post.404', []);
        }
        

        $list_users = DB::table('user_round')->join('users', 'users.id', '=', 'user_round.user_id')
                                             ->select('user_round.*', 'users.full_name', 'users.username', 'users.avatar', 'users.intro', 'users.cat_id')
                                             ->where('round_id', $round->id)
                                             ->get();
        if($list_users) {
            $i = 0;
            $list = array();
            foreach ($list_users as $user) {
                $cate_child  = DB::table('categories')->where('id', $user->cat_id)->where('status', 1)->first();
                $cate_parent = DB::table('categories')->where('id', $cate_child->parent_id)->where('status', 1)->first();
                
                $list[$i]['id']         = $user->user_id;
                $list[$i]['full_name']  = $user->full_name;
                $list[$i]['username']   = $user->username;
                $list[$i]['avatar']     = $user->avatar;
                $list[$i]['intro']      = $user->intro;
                $list[$i]['total_vote'] = $user->vote;

                $vote_today = $this->check_vote_today($userId, $user->user_id);
                if($vote_today){
                    $list[$i]['vote_today'] = 1;
                }else{
                    $list[$i]['vote_today'] = 0;
                }
                $i++;
            }
            return view('pages.user.post.rounds', [
                'cate_parent' => $cate_parent,
                'cate_child' => $cate_child,
                'round' => $round,
                'data' => $list
            ]);
        }else{
            return view('pages.user.post.404', [
            ]);
        }
    }

    public function voteMember(Request $request){
        try {
            if(Auth::guard('user')->check()){
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
            }else{
                return Response::json(['status' => false, 'message' => 'Unauthenticated']);
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