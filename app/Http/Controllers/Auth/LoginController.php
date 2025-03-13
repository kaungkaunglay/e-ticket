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
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http; 


class LoginController extends Controller
{

        
    public function redirectToLine()
    {
        $clientId = env('LINE_CLIENT_ID');
        $redirectUri = env('LINE_REDIRECT_URI'); 
        $state = csrf_token(); 
    
        $lineLoginUrl = "https://access.line.me/oauth2/v2.1/authorize?" . http_build_query([
            "response_type" => "code",
            "client_id" => $clientId,
            "redirect_uri" => $redirectUri, 
            "state" => $state,
            "scope" => "profile openid email",
        ]);
    
        return redirect($lineLoginUrl);
    }
    

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
                'email' => 'これらの認証情報は、当社の記録と一致しません。',
            ]);
        }
        $roleId = $user->roles()->first()->id ?? null;
        if ($roleId != 2 && is_null($user->email_confirmed_at)) {
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
        return redirect()->route('home')->with('success', '正常にログアウトしました。');
    }
   




    public function handleLineCallback(Request $request)
    {
        $code = $request->get('code');
        $clientId = env('LINE_CLIENT_ID');
        $clientSecret = env('LINE_CLIENT_SECRET');
        $redirectUri = env('LINE_REDIRECT_URI');
    
     
        $response = Http::asForm()->post('https://api.line.me/oauth2/v2.1/token', [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $redirectUri,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ]);
    
        $tokenData = $response->json();
    
        if (!isset($tokenData['access_token'])) {
            return redirect('/login')->with('error', 'Failed to authenticate with LINE.');
        }
    
       
        $userResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $tokenData['access_token'],
        ])->get('https://api.line.me/v2/profile');
    
        $userData = $userResponse->json();
    
       
        $user = User::updateOrCreate(
            ['line_id' => $userData['userId']],
            ['name' => $userData['displayName'], 'avatar' => $userData['pictureUrl']]
        );
    
        Auth::login($user);
    
        return redirect('/dashboard');
    }
    


    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
