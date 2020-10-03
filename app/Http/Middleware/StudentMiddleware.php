<?php

namespace App\Http\Middleware;

use Closure;

class StudentMiddleware
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
        if(auth()->check() && $request->user()->type == 2){
            return $next($request);
        }
        else if(auth()->check() && $request->user()->type == 1){
            return redirect()->guest('/admin/dashboard');
        }
        else{
            return redirect()->guest('/');
        }
    }
}
