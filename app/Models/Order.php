<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'user_id', 
        'quantity',
        'sub_amount',
        'amount',
        'payment_method',
        'payment_info',
        'message',
        'note',
        'status'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function orderDetail() {
    	return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }

}
