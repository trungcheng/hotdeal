<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserRound;
use Carbon\Carbon;
use App\Util\Util;
use Response;

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
        'from_date' => 'required|date|after:now',
        'to_date' => 'required|date|after:from_date'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự',
        'from_date.required' => 'Ngày bắt đầu không được để trống',
        'from_date.after' => 'Vui lòng chọn ngày bắt đầu trong tương lai',
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
            $now = Carbon::now('Asia/Bangkok')->format('Y-m-d h:i:s');
            if ($data['from_date'] <= $now && $now <= $data['to_date']) {
                $countRunning = self::where('is_running', 1)->count();
                if ($countRunning >= 1) {
                    self::where('is_running', 1)->update(['is_running' => 0]);
                }
            } else {
                return Response::json([
                    'status' => false, 
                    'message' => 'Thời gian đã vượt quá hoặc chưa đến lúc để khởi động vòng thi',
                    'type' => 'error'
                ]);
            }
        }

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $round)
    {
        $data['slug'] = Util::generateSlug($data['name']);
        if ($data['is_running'] == 1) {
            $now = Carbon::now('Asia/Bangkok')->format('Y-m-d h:i:s');
            if ($data['from_date'] <= $now && $now <= $data['to_date']) {
                $countRunning = self::where('is_running', 1)->count();
                if ($countRunning >= 1) {
                    self::where('is_running', 1)->update(['is_running' => 0]);
                }
            } else {
                return Response::json([
                    'status' => false, 
                    'message' => 'Thời gian đã vượt quá hoặc chưa đến lúc để khởi động vòng thi',
                    'type' => 'error'
                ]);
            }
        }
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

        return $round->update($data);
    }

}
