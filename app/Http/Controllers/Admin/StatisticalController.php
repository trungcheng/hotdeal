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
		$rounds = Round::all();
		$categories = Category::where('parent_id', 0)->where('status', 1)->get();

        return view('pages.admin.statistical.index', [
			'rounds' => $rounds,
			'categories' => $categories
		]);
    }

    public function loadDataChart(Request $request)
    {	
		$categories = [];
		$round = Round::find($request->roundId);
		if ($request->categories) {
			$categories = explode(',', $request->categories);
    		$categories = Category::whereIn('id', $categories)->select('id', 'name')->get();
    	}

		$users = History::groupBy('vote_for')
			->where('round_id', $round->id)
			->selectRaw('vote_for, sum(vote_count) as y');

    	if ($request->date) {
    		$dates = explode(',', $request->date);
    		$users->where('created_at', '>=', $dates[0].' 00:00:00')->where('created_at', '<=', $dates[1].' 23:59:59');
    	}

		$users = $users->get();
		
		if ($round->visible_menu == 0) {
			$categories = [];
			$userArr = [];
			foreach ($users as $user) {
				$userArr[] = [
					'name' => $user->member->full_name,
					'y' => (int) $user->y
				];
			}
			$categories[] = [
				'name' => $round->name,
				'childrens' => [
					[
						'name' => '',
						'slug' => 'all',
						'users' => $userArr
					]
				]
			];

			return Response::json([
				'status' => true,
				'data' => $categories
			]);
		} else {
			// vong 1
			if ($categories && $users) {
				foreach ($categories as $cate) {
					$childs = Category::where('parent_id', $cate->id)->select('id', 'name', 'slug')->get();
					if ($childs->count() > 0) {
						foreach ($childs as $child) {
							$userArr = [];
							foreach ($users as $user) {
								if ($child->id == $user->member->cat_id) {
									$userArr[] = [
										'name' => $user->member->full_name,
										'y' => (int) $user->y
									];
								}
							}
							$child['users'] = $userArr;
						}
						$cate['childrens'] = $childs;
					} else {
						$userArr = [];
						foreach ($users as $user) {
							if ($cate->id == $user->member->cat_id) {
								$userArr[] = [
									'name' => $user->member->full_name,
									'y' => (int) $user->y
								];
							}
						}
						$cate['childrens'] = [
							'name' => '',
							'slug' => 'all',
							'users' => $userArr
						];
					}
				}

				return Response::json([
					'status' => true,
					'data' => $categories
				]);
			}
		}
    	
    	return Response::json([
    		'status' => false,
    		'data' => []
    	]);
    }
    
}