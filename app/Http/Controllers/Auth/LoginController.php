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

    // for form
    public function login(Request $request)
    {
     
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'これらの認証情報は、当社の記録と一致しません。',
            ]);
        }

      
        if (is_null($user->email_confirmed_at)) {
            throw ValidationException::withMessages([
                'email' => 'ログインする前に、メールアドレスを確認してください。',
            ]);
        }


        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended('home');
    }

    // for ajax
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
    
      
        $user = User::where('email', $request->email)->first();
    
       
        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'これらの認証情報は、当社の記録と一致しません。',
            ]);
        }
    
      
        if (is_null($user->email_confirmed_at)) {
            throw ValidationException::withMessages([
                'email' => 'ログインする前に、メールアドレスを確認してください。',
            ]);
        }
    
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }
    
        $request->session()->regenerate();
    
        return redirect()->route('home');
        
    }

    // for ajax
    public function logout()
    {
        try {
            Auth::logout();

            return response()->json([
                'status' => true,
                'message' => '正常にログアウトしました。',
                'redirect' => route('home')
            ]);
        } catch (Exception $e) {
            Log::error('Logout failed', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'ログアウト中にエラーが発生しました。',
            ]);
        }
    }

    // for form
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
