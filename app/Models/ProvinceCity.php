<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceCity extends Model
{
    protected $table = 'province_city';

    protected $fillable = [
        'province_id', 
        'name',
        'slug'
    ];

    public function province() {
    	return $this->belongsTo('App\Models\Province');
    }

    public function product() {
        return $this->belongsToMany('App\Models\Product', 'product_city', 'pro_id', 'city_id');
    }

}
