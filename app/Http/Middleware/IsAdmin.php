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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === 1){
            return $next($request);  // L'utilisateur est admin, on continue
        }

        return redirect()->route('contact')->with('error', 'Accès refusé.');
    }
}
