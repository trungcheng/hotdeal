<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\History;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
    	$userCount = User::where('type', 0)->count();
    	$memberCount = User::where('type', 1)->count();
    	$categoryCount = Category::count();
    	$voteCount = History::whereDate('created_at', Carbon::today())
    		->selectRaw('sum(vote_count) as vote')->get();

        return view('pages.admin.dashboard.index', [
            'userCount' => $userCount,
            'memberCount' => $memberCount,
            'categoryCount' => $categoryCount,
            'voteCount' => $voteCount
        ]);
    }
}