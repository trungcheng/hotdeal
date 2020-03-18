<?php

namespace App\Providers;

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

        view()->composer('*', function($view) {
            $view->with('setting', Setting::first());
        });

        // $categories = Category::where('status', 1)->orderBy('order', 'asc')->get();
        // $this->categories = Util::buildTree($categories);
        // $this->setting = Setting::find(1);

        // view()->composer(['pages.user.*', 'layouts.user.*'], function($view) {
        //     $view->with('countItemCart', Cart::count());
        //     $view->with('categories', $this->categories);
        //     $view->with('setting', $this->setting);
        // });
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
