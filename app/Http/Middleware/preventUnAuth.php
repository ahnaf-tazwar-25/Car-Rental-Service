<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class preventUnAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('LoggedUser') && !session()->has('LoggedNID')){
            return redirect('/');
        }
        if(!session()->has('LoggedUser') && !session()->has('LoggedNID')){
            return redirect('/');
        }
        return $next($request);
    }
}
