<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

   
    public function handleGoogleCallback()
{
    try {
        $googleUser = Socialite::driver('google')->user();

      
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
          
            $user = User::create([
                'first_name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'password' => Hash::make(uniqid()), 
                'email_verified_at' => now(), 
            ]);

            
            DB::table('user_roles')->insert([
                'user_id' => $user->id,
                'role_id' => 3,  
            ]);
        }

        
        $roleId = DB::table('user_roles')->where('user_id', $user->id)->value('role_id');

        
        Auth::login($user);

        
        if ($roleId == 2) {
            return redirect()->intended('/vendor/dashboard');
        } elseif ($roleId == 3) {
            return redirect()->intended('/user-dashboard');
        }

        return redirect()->intended('/home');
    } catch (\Exception $e) {
        return redirect('/login')->with('error', 'Google login failed. Try again.');
    }
}

    

}