<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class PackageService extends Model
{
    protected $table = 'package_services';

    protected $fillable = [
        'service_id',
        'name'
    ];

    public function service() {
    	return $this->belongsTo('App\Models\Service', 'service_id');
    }

    public static $rules_add = [
        'name' => 'required|min:2'
    ];

    public static $rules_update = [
        'name' => 'required|min:2'
    ];

    public static $messages = [
        'name.required' => 'Tên không được để trống',
        'name.min' => 'Tên ít nhất từ 2 ký tự'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-package' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $pro)
    {
        return $pro->update($data);
    }

}
