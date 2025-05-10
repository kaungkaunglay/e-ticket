<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                $role = $user->roles()->first();
                if ($role->id == 1) {
                    return redirect()->route('admin.dashboard');
                } elseif ($role->id == 2) {
                    return redirect()->route('vendor.dashboard');
                } elseif ($role->id == 3) {
                    return redirect()->route('user.dashboard');
                }
            }
        }

        return $next($request);
    }
}
