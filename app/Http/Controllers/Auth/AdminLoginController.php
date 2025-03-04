<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        $user = DB::table('users')->where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Admin name no found.']);
        }


        if (!password_verify($request->password, $user->password)) {
            return response()->json(['status' => false, 'message' => 'Incorrect password.']);
        }


        $role = DB::table('user_roles')->where('user_id', $user->id)->first();
        if (!$role || $role->role_id != 1) {
            return response()->json(['status' => false, 'message' => 'You are not authorized as a admin.']);
        }


        if (Auth::attempt($credentials)) {
            return response()->json(['status' => true, 'redirect' => route('admin.dashboard')]);
        }

        return response()->json(['status' => false, 'message' => 'Invalid credentials']);
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
