<?php

namespace App\Http\Middleware;

use Closure;

class IsBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->IsBlocked()) {
           
            return $next($request);
        }
        if (auth()->check() && !auth()->user()->IsBlocked()) {
            auth()->logout();
            abort(423, 'Your account has been blocked. Please contact our support team for more details.');
        }
       
    }
}
