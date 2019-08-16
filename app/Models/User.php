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
        'cat_id',
        'username',
        'full_name', 
        'email',
        'password',
        'intro',
        'content',
        'avatar',
        'total_vote',
        'status'
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

    public function category() {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }

    public function user_round() {
        return $this->hasMany('App\Models\UserRound', 'user_id', 'id');
    }

    public function history() {
        return $this->belongsTo('App\Models\History', 'vote_for', 'id');
    }

    public static $rules = [
        'full_name' => 'required|min:2',
        'intro' => 'required',
        'content' => 'required'
    ];

    public static $messages = [
        'full_name.required' => 'Họ tên không được để trống',
        'full_name.min' => 'Họ tên ít nhất từ 2 ký tự',
        'intro.required' => 'Vị trí không được để trống',
        'content.required' => 'Thông điệp không được để trống',
    ];

    public static function init($request)
    {
        $data = self::where('id', '>', 0)->where('role_id', 3);

        if ($request->full_name !== 'all-member' && $request->full_name !== 'undefined') {
            $data->where("full_name", "LIKE", "%" . $request->full_name . "%");
        }

        $data = $data->with('category')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        if (in_array($data['content'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['content'] = '';
        }
        $data['cat_id'] = (int) $data['cat_id'];
        $data['password'] = '123456';

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $member)
    {
        if (in_array($data['content'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['content'] = '';
        }
        $data['cat_id'] = (int) $data['cat_id'];

        return $member->update($data);
    }

}