<?php

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;
use Closure;

class Issale
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

        if (Auth::user() &&  Auth::user()->row > 1) {
            return $next($request);
        }elseif(Auth::user() &&  Auth::user()->row == 1 ){
            return redirect('/analysis');
        }

        return redirect('/login');

        
    }
}
