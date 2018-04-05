<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class AccessServiceProvider.
 */
class AccessServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Package boot method.
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $current_route_name = \Route::currentRouteName();
            $view->with('current_route_name', $current_route_name);
        });
        
        $this->registerBladeExtensions();
    }

    protected function registerBladeExtensions()
    {
        /*
         * Role based blade extensions
         * Accepts either string of Role Name or Role ID
         */
        Blade::directive('superadmin', function () {
            return "<?php if (\App\Models\User::find(\Auth::id())->is_super_admin): ?>";
        });
        /*
         * Role based blade extensions
         * Accepts either string of Role Name or Role ID
         */
        Blade::directive('role', function ($role) {
            return "<?php if (\App\Models\User::find(\Auth::id())->hasRole({$role})): ?>";
        });
        /*
         * Accepts array of names or id's
         */
        Blade::directive('roles', function ($roles) {
            return "<?php if (\App\Models\User::find(\Auth::id())->hasRoles({$roles})): ?>";
        });
        /*
         * Generic if closer to not interfere with built in blade
         */
        Blade::directive('end', function () {
            return '<?php endif; ?>';
        });
    }
}