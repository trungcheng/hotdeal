<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User;


class VerifyRole
{
    /**
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param int|string $role
     * @return mixed
     * @throws \HttpOz\Roles\Exceptions\RoleDeniedException
     */
    public function handle($request, Closure $next, ... $roles)
    {
        $currentUser = User::find(\Auth::id());
        if (!$this->auth->check() || !$currentUser->hasRoles($roles)) {
            \Auth::logout();
            $request->session()->flush();
            return redirect('admin/login');
        }

        return $next($request);
    }
}