<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictIpAddressMiddleware
{
    public $restrictedIp = ['14.192.208.230', '206.189.81.54', '68.183.229.82', '159.223.59.119', '165.22.252.143', '128.199.75.201', '178.128.93.101', '188.166.229.55', '128.199.142.95', '188.166.232.2', '192.168.1.115', '128.199.199.111', '127.0.0.1'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if (!in_array($request->ip(), $this->restrictedIp)) {
            abort(403, "You are restricted to access the site");
        }
        return $next($request);
    }
}
