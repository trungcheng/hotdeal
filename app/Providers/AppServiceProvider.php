<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Company;
use App\Util\Util;
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

        // view()->composer('*', function($view) {
        //     $view->with('countItemCart', Cart::count());
        //     $view->with('categories', Category::all());
        //     $view->with('setting', Company::first());
        // });

        // $categories = Category::where('status', 1)->orderBy('order', 'asc')->get();
        // $this->categories = Util::buildTree($categories);
        // $this->setting = Setting::find(1);

        view()->composer(['pages.user.*', 'layouts.user.*'], function($view) {
            $view->with('countItemCart', Cart::count());
            $view->with('categories', Category::all());
            $view->with('setting', Company::first());
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
