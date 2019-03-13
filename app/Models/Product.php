<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'sku_id',
        'cat_id', 
        'user_id',
        'name',
        'short_desc',
        'full_desc',
        'slug',
        'image',
        'image_list',
        'price',
        'discount',
        'price_sale',
        'promo1',
        'promo2',
        'view',
        'is_feature',
        'is_hot',
        'color',
        'size',
        'status'
    ];

    public function category() {
    	return $this->belongsTo('App\Models\Category');
    }

    public function user() {
    	return $this->belongsTo('App\Models\User');
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

    public static $rules = [
        'name' => 'required|min:2',
        'cat_id' => 'required',
        'price' => 'required|numeric',
        'image' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên sản phẩm không được để trống',
        'name.min' => 'Tên sản phẩm ít nhất từ 2 ký tự',
        'cat_id.required' => 'Danh mục không được để trống',
        'price.required' => 'Giá sản phẩm không được để trống',
        'price.numeric' => 'Giá sản phẩm phải là số',
        'image.required' => 'Ảnh sản phẩm không được để trống'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-product' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('category')->orderBy('id', 'desc')->paginate($request->perPage);

        return $data;
    }

    public static function addAction($data)
    {
        $maxId = self::max('id');
        if (!empty($data['image_list'])) {
            $data['image_list'] = json_encode($data['image_list']);
            $data['image_list'] = str_replace('\\', '', $data['image_list']);
        } else {
            $data['image_list'] = '';
        }
        $data['price_sale'] = ((int)$data['discount'] == 0) ? $data['price'] : ((int)$data['price'] - ((int)$data['price'] * (int)$data['discount']) / 100);
        $data['sku_id'] = Util::skuGenerate(12, $maxId + 1);
        $data['slug'] = Util::generateSlug($data['name']).'-'.substr(time(), 0 ,8).'.html';

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $pro)
    {
        if (!empty($data['image_list'])) {
            $data['image_list'] = json_encode($data['image_list']);
            $data['image_list'] = str_replace('\\', '', $data['image_list']);
        } else {
            $data['image_list'] = '';
        }
        $data['price_sale'] = ((int)$data['discount'] == 0) ? $data['price'] : ((int)$data['price'] - ((int)$data['price'] * (int)$data['discount']) / 100);
        $data['slug'] = Util::generateSlug($data['name']).'-'.substr(time(), 0 ,8).'.html';

        return $pro->update($data);
    }

}
