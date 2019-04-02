<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Slide extends Model
{
    protected $table = 'slides';

    protected $fillable = [
        'title',
        'image',
        'target',
        'target_type',
        'status'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product', 'target')->where('slides.target_type', 'product');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article', 'target')->where('slides.target_type', 'article');
    }

    public static $rules = [
        'title' => 'required|min:2',
        'image' => 'required'
    ];

    public static $messages = [
        'title.required' => 'Tiêu đề không được để trống',
        'title.min' => 'Tiêu đề ít nhất từ 2 ký tự',
        'image.required' => 'Ảnh không được để trống',
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-slide' && $request->name !== 'undefined') {
            $data->where("title", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->paginate($request->perPage);

        return $data;
    }

    public static function addAction($data)
    {
        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $slide)
    {
        return $slide->update($data);
    }

}
