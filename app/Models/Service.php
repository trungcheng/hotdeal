<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name'
    ];

    public function package_service() {
        return $this->hasMany('App\Models\PackageService', 'service_id', 'id');
    }

    public static $rules_add = [
        'name' => 'required|min:2'
    ];

    public static $rules_update = [
        'name' => 'required|min:2'
    ];

    public static $messages = [
        'name.required' => 'Tên dịch vụ không được để trống',
        'name.min' => 'Tên dịch vụ ít nhất từ 2 ký tự'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-service' && $request->name !== 'undefined') {
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
