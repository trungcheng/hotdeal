<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCity extends Model
{
    protected $table = 'product_city';

    protected $fillable = [
        'pro_id', 
        'city_id'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product');
    }

    public function provinceCity() {
    	return $this->belongsTo('App\Models\ProvinceCity');
    }

}
