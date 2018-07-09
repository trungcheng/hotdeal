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
        'email',
        'avatar',
        'password',
        'mobile',
        'address',
        'birthday',
        'sex',
        'bio',
        'status', 
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
        return $this->belongsTo('App\Models\Role');
    }

    public static function init($request)
    {
        $data = self::where('id', '>', 0);

        if ($request->name !== 'all-users' && $request->name !== 'undefined') {
            $data->where("fullname", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->orderBy('id', 'desc')->paginate($request->perPage);

        return $data;
    }

    public static function addAction($data)
    {
        self::firstOrCreate([
            'role_id' => $data['permission'],
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'password' => '123456',
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'status' => ($data['selectedOptionStatus'] == 'Hoạt động') ? 1 : 0
        ]);

        return true;
    }

    public static function updateAction($data)
    {
        self::find($data['userId'])->update([
            'role_id' => $data['permission'],
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'status' => ($data['selectedOptionStatus'] == 'Hoạt động') ? 1 : 0
        ]);

        return true;
    }

}