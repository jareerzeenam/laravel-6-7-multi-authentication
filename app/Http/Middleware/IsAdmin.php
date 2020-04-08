<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(auth()->user()->access_level == "Admin"){
            return $next($request);
        }
        elseif (auth()->user()->access_level == "User"){
            return $next($request);
        }
        elseif (auth()->user()->access_level == "Employee"){
            return $next($request);
        }
        return redirect('home')->with('error',"You don't have admin access.");
    }
}
