<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->roles()->where('name', 'admin')->exists()) {
            return $next($request);
        }

        return redirect('/owner/login')->with('error', 'Access denied.');
    }
}