<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AuthCheck
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
        if (session()->has('LoggedNID')) {
            return redirect()->route('renterDashboard');
        } elseif (!session()->has('LoggedUser')) {
            return redirect()->route('homes');
        }

        return $next($request);
    }
}
