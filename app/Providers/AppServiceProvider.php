<?php

namespace App\Providers;

use App\Models\Category;
use App\Util\Util;
use App\Models\Setting;
use App\Models\Round;

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
        $this->round = Round::where('is_running', 1)->first();

        view()->composer('*', function($view) {
            $view->with('categories', $this->categories);
            $view->with('setting', $this->setting);
            $view->with('round', $this->round);
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
