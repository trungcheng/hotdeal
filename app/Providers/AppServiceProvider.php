<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Article;
use App\Util\Util;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

        $categories = Category::where('status', 1)->orderBy('order', 'asc')->get();
        $this->categories = Util::buildTree($categories);
        $this->setting = Setting::find(1);

        view()->composer(['pages.user.*', 'layouts.user.*'], function($view) {
            $view->with('categories', $this->categories);
            $view->with('setting', $this->setting);
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
