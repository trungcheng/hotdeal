<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSeo extends Model
{
    protected $table = 'product_seo';

    protected $fillable = [
        'pro_id', 
        'keyword',
        'description',
        'image'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product');
    }

}
