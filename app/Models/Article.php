<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'user_id', 
        'cat_id',
        'title',
        'slug',
        'intro',
        'fulltext',
        'image',
        'tags',
        'status'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function category() {
    	return $this->belongsTo('App\Models\Category', 'cat_id');
    }

    public static $rules = [
        'title' => 'required|min:2',
        'image' => 'required',
        'intro' => 'required',
        'fulltext' => 'required'
    ];

    public static $messages = [
        'title.required' => 'Tiêu đề không được để trống',
        'title.min' => 'Tiêu đề ít nhất từ 2 ký tự',
        'image.required' => 'Ảnh không được để trống',
        'intro.required' => 'Mô tả ngắn không được để trống',
        'fulltext.required' => 'Nội dung không được để trống',
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-article' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with(['category', 'user'])->orderBy('id', 'desc')->paginate($request->perPage);

        return $data;
    }

    public static function addAction($data)
    {
        $data['slug'] = Util::generateSlug($data['title']).'-'.substr(time(), 0 ,8);

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $pro)
    {
        $data['slug'] = Util::generateSlug($data['name']).'-'.substr(time(), 0 ,8);

        return $pro->update($data);
    }

}
