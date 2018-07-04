<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'parent_id', 
        'name',
        'slug',
        'order',
        'status',
        'is_filter_city'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-category' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->paginate($request->perPage);

        return $data;
    }

    public static function addAction($data)
    {
        self::firstOrCreate([
            'parent_id' => (int)$data['cateParent'],
            'name' => $data['cateName'],
            'slug' => $data['cateSlug'],
            'order' => 1,
            'status' => ($data['selectedOptionStatus'] == 'Hiển thị') ? 1 : 0,
            'is_filter_city' => ($data['selectedOptionLocation'] == 'Có') ? 1 : 0
        ]);

        return true;
    }

    public static function updateAction($data)
    {
        self::find($data['cateId'])->update([
            'parent_id' => (int)$data['cateParent'],
            'name' => $data['cateName'],
            'slug' => $data['cateSlug'],
            'order' => 1,
            'status' => ($data['selectedOptionStatus'] == 'Hiển thị') ? 1 : 0,
            'is_filter_city' => ($data['selectedOptionLocation'] == 'Có') ? 1 : 0
        ]);

        return true;
    }

}
