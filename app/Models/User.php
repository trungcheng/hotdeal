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

    protected $cats = [
        'role_id' => 'integer',
        'type' => 'boolean',
        'status' => 'boolean'
    ];
   
    protected $fillable = [
        'role_id',
        'username',
        'full_name', 
        'email',
        'password',
        'type',
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
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    public static $rulesUserAdd = [
        'username' => 'required|unique:users|min:2',
        'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
    ];

    public static $messagesUserAdd = [
        'username.required' => 'Username không được để trống',
        'username.unique' => 'Username đã tồn tại',
        'username.min' => 'Username ít nhất từ 2 ký tự',
        'password.required' => 'Mật khẩu không được để trống',
        'password.min' => 'Mật khẩu ít nhất 8 ký tự',
        'password.regex' => 'Mật khẩu chứa ít nhất 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt'
    ];

    public static $rules = [
        'full_name' => 'required|min:2',
        'avatar' => 'required'
    ];

    public static $messages = [
        'full_name.required' => 'Họ tên không được để trống',
        'full_name.min' => 'Họ tên ít nhất từ 2 ký tự',
        'avatar.required' => 'Ảnh đại diện không được để trống'
    ];

    public static function init($request)
    {
        $data = self::where('role_id', 3)->where('type', 1);

        if ($request->name !== 'all-member' && $request->name !== 'undefined') {
            $data->where("full_name", "LIKE", "%" . $request->name . "%")
                 ->orWhere("intro", "LIKE", "%" . $request->name . "%");
        }

        if ($request->cate !== 'all-cate' && $request->cate !== 'undefined') {
            $category = Category::find((int)$request->cate);
            if ($category->parent_id == 0) {
                $arrCateIds = [$category->id];
                $childCates = Category::where('parent_id', $category->id)->select('id')->get();
                foreach ($childCates as $child) {
                    $arrCateIds[] = $child->id;
                }
                $data->whereIn("cat_id", $arrCateIds);
            } else {
                $data->where("cat_id", (int) $request->cate);
            }
        }

        if ($request->order !== 'default' && $request->order !== 'undefined') {
            $condition = explode('-', $request->order);
            if (isset($condition[1])) {
                $data = $data->orderBy($condition[0], $condition[1]);    
            } else {
                $data = $data->orderBy($condition[0]);
            }
        } else {
            $data->orderBy('cat_id');
        }

        return $data->with('category')->get();
    }

    public static function initUser($request)
    {
        $data = self::where('role_id', '<>', 1);

        if ($request->name !== 'all-user' && $request->name !== 'undefined') {
            $data->where("username", "LIKE", "%" . $request->name . "%")
                 ->orWhere("full_name", "LIKE", "%" . $request->name . "%")
                 ->orWhere("email", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('role')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addUser($data)
    {
        $data['role_id'] = 2;
        $data['type'] = 0;

        return self::firstOrCreate($data);
    }

    public static function updateUser($data, $user)
    {
        if ($data['password'] == '') {
            unset($data['password']);
        }

        return $user->update($data);
    }

}