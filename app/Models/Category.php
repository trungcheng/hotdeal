<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'type',
        'seo_title',
        'seo_desc',
        'seo_keyword',
        'seo_content'
    ];

    public function product() {
    	return $this->hasMany('App\Models\Product', 'cat_id' , 'id');
    }

    public function article() {
        return $this->hasMany('App\Models\Article', 'cat_id' , 'id');
    }

    public static $rules = [
        'name' => 'required|min:2'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự'
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

        $check = self::where('slug', $data['slug'])->first();
        if ($check) {
            return Response::json([
                'status' => false, 
                'message' => 'Danh mục đã tồn tại', 
                'type' => 'error'
            ]);
        }

        return self::firstOrCreate($data);
    }

    public static function updateAction($cate, $data)
    {
        $data['slug'] = Util::generateSlug($data['name']);
        if (in_array($data['seo_content'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['seo_content'] = '';
        }

        $check = self::where('slug', $data['slug'])->first();
        if ($check) {
            return Response::json([
                'status' => false, 
                'message' => 'Danh mục đã tồn tại', 
                'type' => 'error'
            ]);
        }

        return $cate->update($data);

    }

}
