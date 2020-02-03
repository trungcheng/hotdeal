<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 
        'amount',
        'payment_method',
        'delivery_method',
        'obj_info',
        'note',
        'status'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function orderDetail() {
    	return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-order' && $request->name !== 'undefined') {
            $data->where("amount", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('user')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $order)
    {
        return $order->update($data);
    }

}
