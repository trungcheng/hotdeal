<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        'is_expired',
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

    public static $rules_add = [
        'name' => 'required|min:2',
        'from_date' => 'required',
        'to_date' => 'required'
    ];

    public static $rules_update = [
        'name' => 'required|min:2',
        'from_date' => 'required',
        'to_date' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự',
        'from_date.required' => 'Ngày bắt đầu không được để trống',
        'to_date.required' => 'Ngày kết thúc không được để trống',
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-round' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        $data['slug'] = Util::generateSlug($data['name']);

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $round)
    {
        $data['slug'] = Util::generateSlug($data['name']);

        return $round->update($data);
    }

}
