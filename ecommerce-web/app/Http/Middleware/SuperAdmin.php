<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        // dd('this is a super admin');
        if(Auth::check() && Auth::user()->role_id == 1 && Auth::user()->status == 1){
            return $next($request);
        }else{
            return redirect('/admin')->with('warning','you have no permission.');
        }
    }
}
