<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;

    protected $table = 'categories';

    public $translatedAttributes = ['name', 'description'];

    protected $cats = [
        'parent_id' => 'integer',
        'status' => 'boolean'
    ];

    protected $fillable = [
        'parent_id',
        'name',
        'description',
        'slug',
        'image',
        'status',
        'order',
        'is_home',
        'layout'
    ];

    public function user() {
    	return $this->hasMany('App\Models\User', 'user_id' , 'id');
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

        $category = new Category();
        foreach (\Config::get('translatable.locales') as $locale) {
            $category->translateOrNew($locale)->name = ($locale == 'vi') ? $data['name'] : $data[$locale.'_name'];
            $category->translateOrNew($locale)->description = ($locale == 'vi') ? $data['description'] : $data[$locale.'_description'];
        }

        unset($data['ko_name']);
        unset($data['ko_description']);

        foreach ($data as $key => $value) {
            $category[$key] = $value;
        }

        return $category->save();
    }

    public static function updateAction($cate, $data)
    {
        $data['slug'] = Util::generateSlug($data['name']);

        foreach (\Config::get('translatable.locales') as $locale) {
            $cate->translateOrNew($locale)->name = ($locale == 'vi') ? $data['name'] : $data[$locale.'_name'];
            $cate->translateOrNew($locale)->description = ($locale == 'vi') ? $data['description'] : $data[$locale.'_description'];
        }

        unset($data['ko_name']);
        unset($data['ko_description']);

        foreach ($data as $key => $value) {
            $cate[$key] = $value;
        }

        return $cate->save();

    }

}
