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

        // $key = 'login|' . $request->ip();
        // if (RateLimiter::tooManyAttempts($key, 5)) {
        //     return back()->withErrors([
        //         'email' => 'Too many login attempts. Please try again later.',
        //     ])->onlyInput('email');
        // }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // RateLimiter::increment($key, 60);
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
        try{

            // $key = 'login|' . $request->ip();
            // if (RateLimiter::tooManyAttempts($key, 5)) {
            //     return response()->json([
            //         'status' => false,
            //         'message' => 'Too many login attempts. Please try again later.',
            //     ]);
            // }

            $validator = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]);

            if($validator->fails()){
                // RateLimiter::increment($key, 60);
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()
                ]);
            }

            $user = User::where('email',$request->email)->first();

            if(!$user || !Hash::check($request->password, $user->password))
            {
                return response()->json([
                    'status' => false,
                    'message' => "Provided email or password is Incorrect"
                ]);
            }

            Auth::login($user);

            return response()->json([
                'status' => true,
                'message' => 'Login successful.',
                'redirect' => redirect()->intended(route('home'))->getTargetUrl(),
            ]);

        } catch(Exception $e) {
            Log::error('Authentication failed', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during authentication.',
            ]);
        }
    }

    // for ajax
    public function logout()
    {
        try{
            Auth::logout();

            return response()->json([
                'status' => true,
                'message' => 'Logged out successfully.',
                'redirect' => route('home')
            ]);
        } catch(Exception $e) {
            Log::error('Logout failed', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during logout.',
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
