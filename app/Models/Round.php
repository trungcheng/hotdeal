<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserRound;
use App\Models\User;
use Carbon\Carbon;
use App\Util\Util;

class Round extends Model
{
    protected $table = 'rounds';

    protected $fillable = [
        'name',
        'description',
        'slug',
        'from_date',
        'to_date',
        'is_running',
        'is_reset_vote',
        'user_select_count',
        'visible_menu'
    ];

    public function user_round() {
        return $this->hasMany('App\Models\UserRound', 'round_id', 'id');
    }

    public function history() {
        return $this->hasMany('App\Models\History', 'round_id', 'id');
    }

    public static $rules = [
        'name' => 'required|min:2',
        'from_date' => 'required|date',
        // 'from_date' => 'required|date|after:now',
        'to_date' => 'required|date|after:from_date'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự',
        'from_date.required' => 'Ngày bắt đầu không được để trống',
        // 'from_date.after' => 'Vui lòng chọn ngày bắt đầu trong tương lai',
        'to_date.required' => 'Ngày kết thúc không được để trống',
        'to_date.after' => 'Ngày kết thúc phải sau ngày bắt đầu'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-round' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%")
                 ->orWhere("description", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'asc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        $data['slug'] = Util::generateSlug($data['name']);
        if ($data['is_running'] == 1) {
            $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
            if ($data['from_date'] <= $now && $now <= $data['to_date']) {
                $countRunning = self::where('is_running', 1)->count();
                if ($countRunning >= 1) {
                    self::where('is_running', 1)->update(['is_running' => 0]);
                }
            } else {
                return [
                    'status' => false, 
                    'message' => 'Thời gian hiện tại đã vượt quá hoặc chưa đến lúc để khởi động vòng thi',
                    'type' => 'error'
                ];
            }
        }

        self::firstOrCreate($data);

        return [
            'status' => true,
            'message' => 'Thêm vòng thi thành công',
            'type' => 'success'
        ];
    }

    public static function updateAction($data, $round)
    {
        $data['slug'] = Util::generateSlug($data['name']);
        $userRound = UserRound::where('round_id', $round->id)->get();
        $userRoundSelect = UserRound::where('round_id', $round->id)
            ->where('is_selected', 1)
            ->get();
        if ($userRoundSelect) {
            if ($data['user_select_count'] < $userRoundSelect->count()) {
                return [
                    'status' => false,
                    'message' => 'Số người lựa chọn đã nhỏ hơn số người được lựa chọn hiện tại',
                    'type' => 'error'
                ];
            }
        }
        if ($data['is_running'] == 1 && $round->is_running == 0) {
            $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
            // check thời gian hiện tại phải nằm trong khoảng from_date -> to_date
            if ($data['from_date'] <= $now && $now <= $data['to_date']) {
                $countRunning = self::where('is_running', 1)->count();
                if ($countRunning >= 1) {
                    self::where('is_running', 1)->update(['is_running' => 0]);
                }
                // nếu chưa có nhân vật nào trong vòng thì add toàn bộ nhân vật bình chọn vào vòng
                if (!$userRound || $userRound->count() == 0) {
                	$users = User::where('type', 1)->where('status', 1)->get();
                	foreach ($users as $user) {
                		UserRound::create([
                			'user_id' => $user->id,
                			'round_id' => $round->id,
                			'vote' => 0,
                			'is_selected' => 0
                		]);
                	}
                }
            } else {
                return [
                    'status' => false,
                    'message' => 'Thời gian hiện tại đã vượt quá hoặc chưa đến lúc để khởi động vòng thi',
                    'type' => 'error'
                ];
            }
        }

        $round->update($data);

        return [
            'status' => true,
            'message' => 'Cập nhật vòng thi thành công',
            'type' => 'success'
        ];
    }

    public static function getAllUserByRound($request)
    {
    	$users = UserRound::whereHas('user', function ($query) use ($request) {
    		if ($request->name !== 'all-member' && $request->name !== 'undefined') {
	            $query->where("full_name", "LIKE", "%" . $request->name . "%")
	                  ->orWhere("intro", "LIKE", "%" . $request->name . "%");
	        }
	        if ($request->cate !== 'all-cate' && $request->cate !== 'undefined') {
	            $query->where("cat_id", (int) $request->cate);
	        }
        })->with('user.category')
          ->where('round_id', $request->roundId)
          ->orderBy('vote', 'desc')
          ->get();

		return $users;
    }

}
