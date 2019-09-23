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
    public function handle($request, Closure $next, ...$roles)
    {
        $currentUser = User::find(Auth::guard('admin')->id());

        if (Auth::guard('admin')->check() && $currentUser->hasRoles($roles)) {
            if ($currentUser->status) {
                return $next($request);
            }

            return response()->view('errors.403-Blocked');
        }

        Auth::guard('admin')->logout();
        $request->session()->flush();

        return redirect('vcr19dtbcdscms=rotartsinimda/access/login');
    }
}