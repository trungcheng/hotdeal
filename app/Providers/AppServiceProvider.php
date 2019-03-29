<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\General;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    protected $setting;

    public function boot()
    {
        $general = General::first();

        if ($general) {
            $this->setting = General::first();
            $this->setting->tel = str_replace('.', '', $this->setting->hotline); 
            $this->setting->tel = str_replace(' ', '', $this->setting->tel); 
        } else {
            $this->setting = '';
        }

        view()->composer('*', function($view) {
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
