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
    protected $countItemCart;
    protected $categories;
    protected $setting;

    public function boot()
    {
        Schema::defaultStringLength(191);

        $categories = Category::where('status', 1)
            ->where('type', 'product')
            ->orderBy('order', 'asc')
            ->get();
        $this->categories = Util::buildTree($categories);
        $this->countItemCart = Cart::count();
        $this->setting = Company::first();

        view()->composer(['pages.user.*', 'layouts.user.*'], function($view) {
            $view->with('countItemCart', $this->countItemCart);
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
