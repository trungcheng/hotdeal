<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Round;
use App\Models\UserRound;
use App\Models\Category;
use App\Models\History;
use App\Util\Util;
use Response;
use Validator;

class StatisticalController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
        return view('pages.admin.statistical.index', []);
    }

    public function loadDataChart(Request $request)
    {	
    	$categories = Category::select('id', 'parent_id', 'name')->get();
    	$users = History::groupBy('vote_for')
    		->selectRaw('vote_for, sum(vote_count) as totalVote');

    	if ($request->date) {
    		$dates = explode(',', $request->date);
    		$users->where('created_at', '>=', $dates[0])->where('created_at', '<=', $dates[1]);
    	}

    	$users = $users->get();
    	
    	if ($categories && $users) {
    		foreach ($categories as $key => $cate) {
    			$cate->totalVote = 0;
    			$cate->parentCate = null;
    			if ($cate->parent_id > 0) {
    				$cate->parentCate = Category::find($cate->parent_id)->name;
    			}
    			foreach ($users as $user) {
    				if ($cate->id == $user->member->cat_id) {
    					$cate->totalVote = $user->totalVote;
    				}
    			}
    			if ($cate->parent_id == 0) {
    				$childs = Category::where('parent_id', $cate->id)->get();
    				if ($childs->count() > 0) {
    					unset($categories[$key]);
    				}
    			}
    		}

    		return Response::json([
    			'status' => true,
    			'data' => array_values($categories->toArray())
    		]);
    	}

    	return Response::json([
    		'status' => false,
    		'data' => []
    	]);
    }
    
}