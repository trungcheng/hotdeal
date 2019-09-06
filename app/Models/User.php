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
        'cat_id' => 'integer',
        'total_vote' => 'integer',
        'type' => 'boolean',
        'status' => 'boolean'
    ];
   
    protected $fillable = [
        'role_id',
        'cat_id',
        'username',
        'full_name', 
        'email',
        'intro',
        'content',
        'avatar',
        'video',
        'total_vote',
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

    public function category() {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }

    public function userRound() {
        return $this->hasMany('App\Models\UserRound', 'user_id', 'id');
    }

    public function memberHistory() {
        return $this->hasMany('App\Models\History', 'vote_for', 'id');
    }

    public function userHistory() {
        return $this->hasMany('App\Models\History', 'user_vote', 'id');
    }

    public static $rules = [
        'full_name' => 'required|min:2',
        'cat_id' => 'required',
        'avatar' => 'required',
        'intro' => 'required'
    ];

    public static $messages = [
        'full_name.required' => 'Họ tên không được để trống',
        'full_name.min' => 'Họ tên ít nhất từ 2 ký tự',
        'cat_id.required' => 'Thuộc khối không được để trống',
        'avatar.required' => 'Ảnh đại diện không được để trống',
        'intro.required' => 'Vị trí không được để trống'
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
        $data = self::where('role_id', '<>', 1)->where('type', 0)->where('id', '<>', \Auth::guard('admin')->id());

        if ($request->name !== 'all-user' && $request->name !== 'undefined') {
            $data->where("username", "LIKE", "%" . $request->name . "%");
        }

        $data = $data->with('role')->orderBy('id', 'desc')->get();

        return $data;
    }

    public static function addAction($data)
    {
        if (isset($data['content']) && in_array($data['content'], ['<p><br></p>','<br>','<p></p>',''])) {
            $data['content'] = '';
        }
        $data['cat_id'] = (int) $data['cat_id'];
        $data['role_id'] = 3;
        $data['type'] = 1;
        $data['username'] = str_slug($data['full_name'], '-');

        return self::firstOrCreate($data);
    }

    public static function updateAction($data, $member)
    {
        if (isset($data['content'])) {
            if (in_array($data['content'], ['<p><br></p>','<br>','<p></p>',''])) {
                $data['content'] = '';
            }
            $data['cat_id'] = (int) $data['cat_id'];
            $data['username'] = str_slug($data['full_name'], '-');
        }

        return $member->update($data);
    }

}