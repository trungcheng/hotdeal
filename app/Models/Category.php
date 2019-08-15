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
        'description',
        'slug',
        'image',
        'status'
    ];

    public function user() {
    	return $this->hasMany('App\Models\User', 'cat_id' , 'id');
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

        return self::firstOrCreate($data);
    }

    public static function updateAction($cate, $data)
    {
        $data['slug'] = Util::generateSlug($data['name']);

        return $cate->update($data);

    }

}
