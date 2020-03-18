<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class History extends Model
{
    protected $table = 'histories';

    protected $fillable = [
        'data_service_id',
        'name',
        'action',
        'status',
        'amount',
        'paid_price'
    ];

    public function data_service() {
    	return $this->belongsTo('App\Models\DataService', 'data_service_id');
    }

    public static $rules_add = [
        'name' => 'required|min:2',
        'amount' => 'required'
    ];

    public static $rules_update = [
        'name' => 'required|min:2',
        'amount' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự',
        'amount.required' => 'Số tiền không được để trống'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-history' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $pro)
    {
        return $pro->update($data);
    }

}
