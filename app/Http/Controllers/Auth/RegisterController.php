<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    // for laravel form
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirm',
            'confirm_password' => 'required'
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole(3);

        return to_route('login')->with('success', 'Registration successful. Please log in.');
    }

    // for ajax
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'first_name' => 'required|min:3|max:50',
                'last_name' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|confirmed',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()
                ]);
            }

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $user->assignRole(3);

            return response()->json([
                'status' => true,
                'message' => 'Registration successful. Please log in.',
                'redirect' => route('login')
            ]);
        }catch(Exception $e) {
            Log::error('Registration failed', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'An error occurred during registration.',
            ]);
        }

    }
}
