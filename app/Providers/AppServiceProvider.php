<?php

namespace App\Providers;

use App\Models\Category;
use App\Util\Util;
use App\Models\Setting;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        $categories = Category::where('status', 1)->get();
        $this->categories = Util::buildTree($categories->toArray());
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
