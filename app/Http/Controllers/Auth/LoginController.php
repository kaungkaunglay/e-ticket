<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // login view
    public function index()
    {
        return view('auth.login');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records.',
            ]);
        }


        $roleId = $user->roles()->first()->id ?? null;


        if ($roleId == 2 && is_null($user->email_confirmed_at)) {
            throw ValidationException::withMessages([
                'email' => 'Please confirm your email before logging in.',
            ]);
        }

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();


        if ($roleId == 2) {
            return redirect()->intended('/vendor/dashboard');
        } elseif ($roleId == 3) {
            return redirect()->intended('/user-dashboard');
        }

        return redirect()->intended('/home');
    }



    // for ajax
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }

   
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home');
    }


   
}
