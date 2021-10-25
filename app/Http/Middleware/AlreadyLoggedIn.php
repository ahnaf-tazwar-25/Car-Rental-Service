<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
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
        /*
        if (session()->has('LoggedUser') && (url('login') == $request->url() || url('register') == $request->url())){
                // return redirect()->route("registerRenter");
                return redirect('/');
                // return redirect()->back();
            }else*/
            if(session()->has('LoggedUser')){
                // session()->pull('LoggedUser');
                // dd('asdasdasd');
                return redirect('/');
            }
            /*
            if(session()->has('LoggedNID') && !session()->has('LoggedUser')){
                // session()->pull('LoggedUser');
                // dd('asdasdasd');
                return redirect('/');
            }*/
            
            return $next($request);
    }
}
