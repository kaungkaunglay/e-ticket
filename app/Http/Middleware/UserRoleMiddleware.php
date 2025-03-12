<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); 
        }

        $user = Auth::user();


        if (!$user->roles()->where('name', 'user')->exists()) {
            abort(403, 'Unauthorized access.'); 
        }

        return $next($request);
    }
}
