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
        'type',
        'status'
    ];

    public function product() {
        return $this->belongsTo('App\Models\Product', 'target');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article', 'target');
    }

    public static $rules = [
        'image' => 'required'
    ];

    public static $messages = [
        'image.required' => 'Ảnh không được để trống'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-slide' && $request->name !== 'undefined') {
            $data->where("title", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->get();

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
