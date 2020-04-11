<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Article;
use App\Util\Util;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(['pages.user.*', 'layouts.user.*'], function($view) {
            $view->with('countItemCart', Cart::count());
            $view->with('categories', Category::all());
            $view->with('setting', Company::first());
            $view->with('sidebarArticles', Article::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
