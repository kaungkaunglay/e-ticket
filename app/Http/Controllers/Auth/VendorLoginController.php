<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PromotionCode;
use App\Mail\VendorConfirmationMail;
use Carbon\Carbon;


class VendorLoginController extends Controller
{




    public function showLoginForm()
    {
        return view('auth.vendor-login');
    }

    public function showRegisterForm()
    {
        return view('auth.vendor-register');
    }




    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        $user = DB::table('users')->where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }


        if (!password_verify($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Incorrect password.');
        }


        $role = DB::table('user_roles')->where('user_id', $user->id)->first();
        if (!$role || $role->role_id != 2) {
            return redirect()->back()->with('error', 'You are not authorized as a vendor.');
        }


        if (Auth::attempt($credentials)) {
            return redirect()->route('vendor.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('vendor.login')->with('success', 'Logged out successfully.');
    }
}
