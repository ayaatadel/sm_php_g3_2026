<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // auth() ==> login user , user

        if(!Auth::check())
            {
              return  to_route('auth.showLogin');
            }

            if(Auth::user()->role!=='admin')
                {
                    return redirect()->route('welcome');
                }
                return $next($request);
    }
}

