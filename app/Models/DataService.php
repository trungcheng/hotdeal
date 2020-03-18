<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;

class DataService extends Model
{
    protected $table = 'data_services';

    protected $fillable = [
        'user_id',
        'service_id',
        'package_service_id',
        'name',
        'ip',
        'domain',
        'domain_type',
        'duration',
        'price',
        'vat_price',
        'total_price',
        'paid_price',
        'date_actived',
        'date_expired',
        'status',
        'note'
    ];

    public function user() {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function service() {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }

    public function history() {
        return $this->hasMany('App\Models\History', 'data_service_id', 'id');
    }

    public static $rules_add = [
        'name' => 'required|min:2',
        'price' => 'required'
    ];

    public static $rules_update = [
        'name' => 'required|min:2',
        'price' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Tên dịch vụ không được để trống',
        'name.min' => 'Tên dịch vụ ít nhất từ 2 ký tự',
        'price.required' => 'Giá dịch vụ không được để trống'
    ];

    public static function init($serviceId, $request)
    {
        $data = self::where('id', '>', 0)->where('service_id', $serviceId);

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

    public static function updateAction($data, $service)
    {
        return $service->update($data);
    }

}
