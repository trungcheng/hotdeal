<?php

namespace App\Http\Middleware\User;

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
        $authUser = \Auth::user();
        \View::share('authUser', $authUser);

        return $next($request);
    }
}