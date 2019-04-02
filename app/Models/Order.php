<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'pro_id',
        'quantity',
        'name',
        'phone',
        'address',
        'is_contact'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product', 'pro_id');
    }

    public static $rules = [
        'name' => 'required|min:2',
        'phone' => 'required',
        'address' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự',
        'phone.required' => 'Số điện thoại không được để trống',
        'address.required' => 'Địa chỉ không được để trống'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-order' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%")
                 ->orWhere("phone", "LIKE", "%".$request->name."%");
        }

        $data = $data->with('product')->orderBy('id', 'desc')->paginate($request->perPage);

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
