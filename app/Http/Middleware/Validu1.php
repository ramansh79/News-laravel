<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class validu1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // echo "valid 1";
        // echo ".$role.";
        if(Auth::check() && Auth::user()->user_role != $role){
            return $next($request);
        }elseif(Auth::check() && Auth::user()->user_role == $role){
            return redirect()->route('admin.main');
        }else{
            return redirect()->route('guestPage');
        }
    }
}
