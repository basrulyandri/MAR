<?php

namespace App\Http\Middleware;

use Closure;

class RefferalMiddleware
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
        //\Cookie::get('sin');
        if($request->has('psr')){
            \Cookie::queue(\Cookie::make('psr', $request->psr, time() + (86400 * 30)));
            //\Cookie::queue('psr', $request->psr, time() + (86400 * 30));      
        }

        if($request->has('sin')){
            \Cookie::queue(\Cookie::make('sin', $request->sin, time() + (86400 * 30)));
            //\Cookie::queue('sin', $request->sin, time() + (86400 * 30));      
        }
        return $next($request);
    }
}
