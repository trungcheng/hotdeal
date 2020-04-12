<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Util\Util;
use Carbon\Carbon;

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
        'is_feature',
        'status',
        'seo_title',
        'seo_desc',
        'seo_keyword'
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
        'name.required' => 'Tiêu đề không được để trống',
        'name.min' => 'Tiêu đề ít nhất từ 2 ký tự',
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

        $data = $data->with(['category', 'user'])->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        $data['slug'] = Util::generateSlug($data['title']);

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $pro)
    {
        return $pro->update($data);
    }

}
