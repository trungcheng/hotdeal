<?php

namespace App\Http\Middleware\Admin;

class SetDefaultValues
{
    
    public function __construct() {}
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $authAdminUser = \Auth::guard('admin')->user();
        \View::share('authAdminUser', $authAdminUser);

        return $next($request);
    }
}