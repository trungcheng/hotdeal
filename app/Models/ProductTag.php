<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    protected $table = 'product_tag';

    protected $fillable = [
        'pro_id', 
        'tag_name'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product');
    }

}
