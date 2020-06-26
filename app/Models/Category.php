<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;
use Carbon\Carbon;

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
        'sliders',
        'status',
        'order',
        'is_home',
        'layout'
    ];

    public function getCreatedAtAttribute($date) {
        Carbon::setLocale('vi');
        $day = $this->convert(Carbon::createFromFormat('Y-m-d H:i:s', $date)->copy()->tz('Asia/Ho_Chi_Minh')->format('l'));

        return $day. ', ' .Carbon::createFromFormat('Y-m-d H:i:s', $date)->copy()->tz('Asia/Ho_Chi_Minh')->format('d/m/Y, H:i');
    }

    public function convert($weekday) {
        $weekday = strtolower($weekday);
        switch($weekday) {
            case 'monday':
                $weekday = 'Thứ hai';
                break;
            case 'tuesday':
                $weekday = 'Thứ ba';
                break;
            case 'wednesday':
                $weekday = 'Thứ tư';
                break;
            case 'thursday':
                $weekday = 'Thứ năm';
                break;
            case 'friday':
                $weekday = 'Thứ sáu';
                break;
            case 'saturday':
                $weekday = 'Thứ bảy';
                break;
            default:
                $weekday = 'Chủ nhật';
                break;
        }

        return $weekday;
    }

    public function children() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
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

    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->children()->update([
                'parent_id' => 0,
                'order' => 1
            ]);
        });
    }

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
            $category->translateOrNew($locale)->name = ($locale == 'en') ? $data['name'] : $data[$locale.'_name'];
            $category->translateOrNew($locale)->description = ($locale == 'en') ? $data['description'] : $data[$locale.'_description'];
        }

        if (isset($data['vi_name'])) unset($data['vi_name']);
        if (isset($data['vi_description'])) unset($data['vi_description']);

        foreach ($data as $key => $value) {
            if ($key == 'sliders' && count($value) > 0) {
                $value = implode(',', array_filter($value, function ($val) { 
                    return !is_null($val) && $val != '';
                }));
            }
            $category[$key] = $value;
        }

        return $category->save();
    }

    public static function updateAction($cate, $data)
    {
        // $data['slug'] = Util::generateSlug($data['name']);

        foreach (\Config::get('translatable.locales') as $locale) {
            $cate->translateOrNew($locale)->name = ($locale == 'en') ? $data['name'] : $data[$locale.'_name'];
            $cate->translateOrNew($locale)->description = ($locale == 'en') ? $data['description'] : $data[$locale.'_description'];
        }

        unset($data['vi_name']);
        unset($data['vi_description']);

        foreach ($data as $key => $value) {
            if ($key == 'sliders' && count($value) > 0) {
                $value = implode(',', array_filter($value, function ($val) { 
                    return !is_null($val) && $val != '';
                }));
            }
            $cate[$key] = $value;
        }

        return $cate->save();

    }

}
