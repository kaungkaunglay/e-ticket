<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login view
    public function login()
    {
        return view('login');
    }

    // signup view
    public function signup()
    {
        return view('signup');
    }

    // register
    public function register(Request $request)
    {
        // validate the request
        $request->validate([
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirm',
            'confirm_password' => 'required'
        ]);

        // create user if validate success
        $user = User::create([
            'fi'
        ]);


    }


}
