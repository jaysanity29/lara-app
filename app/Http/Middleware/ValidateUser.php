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
          if(auth()->check() && $request->user()->status != 'pending'){
            return redirect()->guest('/account/conflictAccount');
        }
        else if(($request->user()->typ_id == 3 && $request->user()->grp_id == 1) || ($request->user()->typ_id == 3 && $request->user()->sec_id == null)){
            return redirect()->guest('/student/group');
        }
        else{
            return $next($request);
        }
    }
}
