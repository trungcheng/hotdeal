<?php

namespace App\Providers;

use App\Models\Category;
use App\Util\Util;

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

        view()->composer('*', function($view) {
            $view->with('categories', $this->categories);
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
