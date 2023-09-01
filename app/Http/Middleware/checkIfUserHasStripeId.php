<?php

namespace App\Http\Middleware;

use Closure;

class checkIfUserHasStripeId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->hasStripeId()) {
           
            return $next($request);
        } else {
            // if it has not , set up one
            $stripeCustomer = auth()->user()->createAsStripeCustomer();

            return $next($request);
        }
        
       
    }
}
