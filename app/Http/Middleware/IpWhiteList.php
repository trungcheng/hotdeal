<?php

namespace App\Http\Middleware;

use Closure;
use Response;

class IpWhiteList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $whiteListIps = \Config::get('constants.WHITELIST_IP');
        $ips = explode(';', $whiteListIps);

        if (!in_array($request->ip(), $ips)) {
            if ($request->ajax()) {
                return Response::json([
                    'status' => false,
                    'message' => 'Đã xảy ra lỗi'
                ]);
            } else {
                return redirect()->route('home');
            }
        }

        return $next($request);
    }
}
