<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use App\Traits\UserTrait;

class User extends Model implements Authenticatable
{
    use UserTrait, AuthenticableTrait;

    protected $table = 'users';
   
    protected $fillable = [
        'role_id',
        'username',
        'fullname', 
        'organize_name', 
        'email',
        'avatar',
        'password',
        'mobile',
        'address',
        'birthday',
        'sex',
        'bio',
        'status', 
        'identity_card',
        'tax_code',
        'confirmation_code', 
        'is_confirmed',
        'jwt_token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function role() {
        return $this->belongsTo('App\Models\Role', 'role_id');
    }

    public function data_service() {
        return $this->hasMany('App\Models\DataService', 'user_id', 'id');
    }

    public static $rules = [
        'fullname' => 'required|min:2',
        'email' => 'required|email',
        'mobile' => 'required|numeric'
    ];

    public static $messages = [
        'fullname.required' => 'Họ tên không được để trống',
        'fullname.min' => 'Họ tên ít nhất từ 2 ký tự',
        'email.required' => 'Email không được để trống',
        'email.email' => 'Email không đúng định dạng',
        'mobile.required' => 'Điện thoại không được để trống',
        'mobile.numeric' => 'Điện thoại phải là định dạng số'
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0)->where('role_id', 2);

        if ($request->name !== 'all-user' && $request->name !== 'undefined') {
            $data->where("fullname", "LIKE", "%" . $request->name . "%")
                 ->orWhere("mobile", "LIKE", "%" . $request->name . "%")
                 ->orWhere("email", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('role')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function initCustomer($request)
    {
        $data = self::where('id', '>', 0)->whereIn('role_id', [3,4]);

        if ($request->name !== 'all-customer' && $request->name !== 'undefined') {
            $data->where("fullname", "LIKE", "%" . $request->name . "%")
                 ->orWhere("mobile", "LIKE", "%" . $request->name . "%")
                 ->orWhere("email", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('role')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        $data['password'] = bcrypt('123456');
        
        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $member)
    {
        return $member->update($data);
    }

}