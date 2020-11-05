<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(auth()->check() && $request->user()->type == 1){
            return $next($request);
        }
        else if(auth()->check() && $request->user()->type == 2){
            return redirect()->guest('/student/dashboard');
        }
         else if(auth()->check() && $request->user()->type == 3){
            return redirect()->guest('/research-personnel/dashboard');
        }
        else{
            return redirect()->guest('/');
        }
    }
}
