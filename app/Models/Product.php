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
        'is_new',
        'color',
        'size',
        'status',
        'seo_title',
        'seo_desc',
        'seo_keyword'
    ];

    public function category() {
    	return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public function slide() {
        return $this->hasMany('App\Models\Slide', 'target')->where('slides.target_type', 'product');
    }

    public function orderDetail() {
        return $this->hasMany('App\Models\OrderDetail', 'pro_id', 'id');
    }

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
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

    public static $rules_add = [
        'name' => 'required|min:2',
        'price' => 'required',
        'image' => 'required|mimes:jpeg,jpg,png,gif|max:5120'
    ];

    public static $rules_update = [
        'name' => 'required|min:2',
        'price' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên sản phẩm không được để trống',
        'name.min' => 'Tên sản phẩm ít nhất từ 2 ký tự',
        'price.required' => 'Giá sản phẩm không được để trống',
        'image.required' => 'Ảnh sản phẩm không được để trống',
        'image.mimes' => 'Định dạng ảnh không đúng',
        'image.max' => 'Dung lượng ảnh không được vượt quá 5MB'
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
            $data['image_list'] = '[]';
        }
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price_sale'] = str_replace(',', '', $data['price_sale']);
        
        if ($data['price_sale'] != '') {
            if ((float)$data['price_sale'] >= (float)$data['price']) {
                $data['price_sale'] = $data['price'];
                $data['discount'] = 0;
            } else {
                $data['discount'] = round(((float)$data['price'] - (float)$data['price_sale']) / (float)$data['price'] * 100);
            }
        } else {
            $data['price_sale'] = $data['price'];
            $data['discount'] = 0;
        }
        
        $data['sku_id'] = ($data['sku_id'] == '') ? Util::skuGenerate(6, $maxId + 1) : $data['sku_id'];
        $data['slug'] = Util::generateSlug($data['name']).'.html';
        
        if (in_array($data['short_desc'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['short_desc'] = '';
        }
        if (in_array($data['full_desc'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['full_desc'] = '';
        }

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $pro)
    {
        if (!empty($data['image_list'])) {
            $data['image_list'] = json_encode($data['image_list']);
            $data['image_list'] = str_replace('\\', '', $data['image_list']);
        } else {
            $data['image_list'] = '[]';
        }
        $data['price'] = str_replace(',', '', $data['price']);
        $data['price_sale'] = str_replace(',', '', $data['price_sale']);
        
        if ($data['price_sale'] != '') {
            if ((float)$data['price_sale'] >= (float)$data['price']) {
                $data['price_sale'] = $data['price'];
                $data['discount'] = 0;
            } else {
                $data['discount'] = round(((float)$data['price'] - (float)$data['price_sale']) / (float)$data['price'] * 100);
            }
        } else {
            $data['price_sale'] = $data['price'];
            $data['discount'] = 0;
        }

        if (in_array($data['short_desc'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['short_desc'] = '';
        }
        if (in_array($data['full_desc'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['full_desc'] = '';
        }

        return $pro->update($data);
    }

}
