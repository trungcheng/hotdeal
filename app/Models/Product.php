<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'cat_id', 
        'user_id',
        'name',
        'description',
        'slug',
        'image',
        'price',
        'discount',
        'promo1',
        'promo2',
        'views',
        'is_feature',
        'is_hot',
        'color',
        'size'
    ];

    public function category() {
    	return $this->belongsTo('App\Models\Category');
    }

    public function user() {
    	return $this->belongsTo('App\Models\User');
    }

    public function image() {
        return $this->hasMany('App\Models\ProductImage', 'pro_id', 'id');
    }

    public function seo() {
        return $this->hasMany('App\Models\ProductSeo', 'pro_id', 'id');
    }

    public function tag() {
        return $this->hasMany('App\Models\ProductTag', 'pro_id', 'id');
    }

    public function city() {
        return $this->belongsToMany('App\Models\ProvinceCity', 'product_city', 'pro_id', 'city_id');
    }

}
