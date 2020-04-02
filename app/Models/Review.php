<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'pro_id', 
        'name',
        'email',
        'phone',
        'content',
        'star',
        'status'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product', 'pro_id', 'id');
    }

    public static $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
        'content' => 'required',
        'star' => 'required|min:1|max:5|size:1'
    ];

    public static $messages = [
        'name.required' => 'Họ tên không được để trống',
        'name.min' => 'Họ tên ít nhất từ 2 ký tự',
        'email.required' => 'Email không được để trống',
        'email.email' => 'Email không đúng định dạng',
        'phone.required' => 'Điện thoại không được để trống',
        'phone.regex' => 'Điện thoại phải là định dạng số',
        'phone.min' => 'Điện thoại phải gồm 10 số',
        'phone.max' => 'Điện thoại phải gồm 10 số',
        'content.required' => 'Nội dung không được để trống',
        'star.required' => 'Nội dung không được để trống',
        'star.min' => 'Số sao đánh giá nhỏ nhất là 1',
        'star.max' => 'Số sao đánh giá lớn nhất là 5',
        'star.size' => 'Số sao đánh giá chỉ nằm trong khoảng từ 1 đến 5'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-review' && $request->name !== 'undefined') {
            $data->where("name", "LIKE", "%" . $request->name . "%")
                 ->orWhere("email", "LIKE", "%" . $request->name . "%")
                 ->orWhere("phone", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('product')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $review)
    {
        return $review->update($data);
    }
}
