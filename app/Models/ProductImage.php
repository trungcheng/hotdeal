<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';

    protected $fillable = [
        'pro_id', 
        'image_url'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product');
    }

}
