<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'icon',
        'order',
        'type',
        'is_home',
        'status',
        'seo_title',
        'seo_desc',
        'seo_keyword',
        'seo_content',
        'seo_schema'
    ];

    public function product() {
    	return $this->hasMany('App\Models\Product', 'cat_id' , 'id');
    }

    public function article() {
        return $this->hasMany('App\Models\Article', 'cat_id' , 'id');
    }

    public static $rules = [
        'name' => 'required|min:2',
        'order' => 'required|numeric|min:1|max:99'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự',
        'order.required' => 'Thứ tự không được để trống',
        'order.min' => 'Thứ tự nhỏ nhất từ 1',
        'order.max' => 'Thứ tự lớn nhất đến 99'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-category' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        $data['slug'] = Util::generateSlug($data['name']);

        if (in_array($data['seo_content'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['seo_content'] = '';
        }
        if (in_array($data['seo_schema'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['seo_schema'] = '';
        }

        return self::firstOrCreate($data);
    }

    public static function updateAction($cate, $data)
    {
        $data['slug'] = Util::generateSlug($data['name']);

        if (in_array($data['seo_content'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['seo_content'] = '';
        }
        if (in_array($data['seo_schema'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['seo_schema'] = '';
        }

        return $cate->update($data);

    }

}
