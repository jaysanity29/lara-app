<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUser
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
        $status = strtolower($request->user()->status);
        if(auth()->check() && $status == 'pending'){
            return redirect()->guest('/pending-account');
        }
        else if(auth()->check() && $request->user()->type == '2' && $request->user()->group == 'no-group' && $status != 'pending')
        {
            return redirect()->guest('/new-account')->withSuccess('Message');
        }
        else{
            return $next($request);
        }
    }
}
