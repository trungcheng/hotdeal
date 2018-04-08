<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'parent_id', 
        'name',
        'slug',
        'order',
        'status',
        'is_filter_city'
    ];

    public function product() {
    	return $this->hasMany('App\Models\Product', 'cat_id' , 'id');
    }

}
