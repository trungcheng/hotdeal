<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User;
use Auth;

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
        if (Auth::guard('admin')->check()) {
            $userId = Auth::guard('admin')->user()->id;
            $currentUser = User::find($userId);
            if ($currentUser->role_id !== 3) {
                return $next($request);
            }
        }

        Auth::guard('admin')->logout();
        $request->session()->flush();

        return redirect('admin/login');
    }
}