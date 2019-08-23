<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use App\Util\Util;
use Response;
use Session;
use DB;

class WebController extends Controller
{

	public function __construct() {
        // $this->middleware('');
    }

    public function processPage(Request $request, $slug) {
        $category = DB::table('categories')->where('slug', $slug)->where('status', 1)->first();
        if($category) {
            $users = DB::table('users')->select('*')->where('cat_id', $category->id)->where('role_id', 3)->where('status', 1)->get();
            return view('pages.user.post.category', [
                'cate' => $category,
                'data' => $users
            ]);
        }else{
            $user = DB::table('users')->where('id', $slug)->where('status', 1)->first();
            if($user) {
                $category = DB::table('categories')->where('id', $user->cat_id)->where('status', 1)->first();
                $parent = DB::table('categories')->where('id', $category->parent_id)->where('status', 1)->first();
                return view('pages.user.post.detail', [
                    'cate' => $category,
                    'parent' => $parent,
                    'data' => $user
                ]);
            }else{// 404
                return view('pages.user.post.404', [
                ]);
            }
        }
    }

}