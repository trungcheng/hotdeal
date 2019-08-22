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
    	$users = User::groupBy('cat_id')
    		->selectRaw('cat_id, sum(total_vote) as totalVote')
    		->get();
    	if ($categories && $users) {
    		foreach ($categories as $cate) {
    			$cate->totalVote = 0;
    			$cate->parentCate = null;
    			if ($cate->parent_id > 0) {
    				$cate->parentCate = Category::find($cate->parent_id)->name;
    			}
    			foreach ($users as $user) {
    				if ($cate->id == $user->cat_id) {
    					$cate->totalVote = $user->totalVote;
    				}
    			}
    		}
    	}

    	return Response::json($categories);
    }
    
}