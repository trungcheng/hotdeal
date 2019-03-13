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
        'order',
        'status',
        'is_filter_city'
    ];

    public function product() {
    	return $this->hasMany('App\Models\Product', 'cat_id' , 'id');
    }

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
        $genSlug = Util::generateSlug($data['cateName']);

        return self::firstOrCreate([
            'parent_id' => (int)$data['cateParent'],
            'name' => $data['cateName'],
            'slug' => $genSlug,
            'order' => 1,
            'status' => ($data['selectedOptionStatus'] == 'Hiển thị') ? 1 : 0,
            'is_filter_city' => 0
        ]);
    }

    public static function updateAction($data)
    {
        $genSlug = Util::generateSlug($data['cateName']);
        
        return self::find($data['cateId'])->update([
            'parent_id' => (int)$data['cateParent'],
            'name' => $data['cateName'],
            'slug' => $genSlug,
            'order' => 1,
            'status' => ($data['selectedOptionStatus'] == 'Hiển thị') ? 1 : 0,
            'is_filter_city' => 0
        ]);

    }

}
