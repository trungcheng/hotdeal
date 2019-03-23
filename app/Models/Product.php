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
        'between_lug',
        'bracelet',
        'case',
        'case_diameter',
        'dial_color',
        'crystal',
        'water_resistance',
        'sex',
        'wire_material',
        'glass_material',
        'energy_type',
        'version',
        'status'
    ];

    public function category() {
    	return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function slide() {
        return $this->hasMany('App\Models\Slide', 'target')->where('slides.target_type', 'product');
    }

    public static $rules = [
        'name' => 'required|min:2',
        'price' => 'required',
        'image' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên sản phẩm không được để trống',
        'name.min' => 'Tên sản phẩm ít nhất từ 2 ký tự',
        'price.required' => 'Giá sản phẩm không được để trống',
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
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price_sale'] = ((float)$data['discount'] == 0) ? $data['price'] : ((float)$data['price'] - ((float)$data['price'] * (float)$data['discount']) / 100);
        $data['sku_id'] = Util::skuGenerate(6, $maxId + 1);
        $data['slug'] = Util::generateSlug($data['name']).'-'.substr(time(), 0 ,8).'.html';
        if ($data['short_desc'] == '<p><br></p>') {
            $data['short_desc'] = '';
        }

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
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price_sale'] = ((float)$data['discount'] == 0) ? $data['price'] : ((float)$data['price'] - ((float)$data['price'] * (float)$data['discount']) / 100);
        // $data['slug'] = Util::generateSlug($data['name']).'-'.substr(time(), 0 ,8).'.html';
        if ($data['short_desc'] == "<p><br></p>") {
            $data['short_desc'] = '';
        }

        return $pro->update($data);
    }

}
