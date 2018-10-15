<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AppMiddleware
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
        if(getOption('app_is_active') == 0){
            if(!auth()->check()){
                if(in_array(\Request::route()->getName(),['auth.login','auth.dologin','auth.logout'])){
                    return $next($request);
                }else{
                    return new Response(view('inactive'));                    
                }
            }elseif(!auth()->user()->isAdmin()){
                return new Response(view('inactive'));                                    
            }
        }

        return $next($request);
    }
}
