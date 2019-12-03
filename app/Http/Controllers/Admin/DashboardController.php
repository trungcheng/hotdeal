<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{

	public function __construct() {
        // $this->middleware('admin.auth');
    }

    public function index()
    {
    	$countUsers = User::count();
    	$countCategories = Category::count();
    	$countArticles = Article::count();
    	$countArticleTodays = Article::where('created_at', Carbon::today())->count();

    	return view('pages.admin.dashboard.index', [
    		'countUsers' => $countUsers,
    		'countCategories' => $countCategories,
    		'countArticles' => $countArticles,
    		'countArticleTodays' => $countArticleTodays
    	]);
    }
}