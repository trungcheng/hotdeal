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

        // $categories = Category::where('status', 1)->orderBy('order', 'asc')->get();
        // $this->categories = Util::buildTree($categories);
        // $this->setting = Setting::find(1);
        $this->featureFooterArticles = Article::where('type', 'new')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(2)
            ->get();

        view()->composer(['pages.user.*', 'layouts.user.*'], function($view) {
            // $view->with('categories', $this->categories);
            $view->with('setting', Setting::find(1));
            $view->with('featureFooterArticles', $this->featureFooterArticles);
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
