<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->roles()->where('name', 'shoper')->exists()) {
            return $next($request);
        }

        return redirect('/vendor/login')->with('error', 'Access denied.');
    }
}
