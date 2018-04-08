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

    public function new() {
        return $this->hasMany('App\Models\New', 'user_id', 'id');
    }

    public function order() {
        return $this->hasMany('App\Models\Order', 'user_id', 'id');
    }

    public function product() {
        return $this->hasMany('App\Models\Product', 'user_id', 'id');
    }

}