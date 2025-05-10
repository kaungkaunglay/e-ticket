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
use App\Models\PromotionCode;
use App\Mail\VendorConfirmationMail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


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
            'password' => 'required|min:8|confirmed',
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
       
        $request->validate([
            'first_name' => 'nullable|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|min:8|confirmed',
            'postal_code' => 'required|string|max:10',
            'address' => 'required|string|max:255',
        ], [
            'first_name' => 'もう一度名前を追加してください。', 
            'last_name.required' => '姓を入力してください。', 
            'email.required' => 'メールアドレスを入力してください。', 
            'email.email' => '有効なメールアドレスを入力してください。', 
            'email.unique' => 'このメールアドレスは既に使用されています。', 
            'phone.required' => '電話番号を入力してください。', 
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードは8文字以上で入力してください。', 
            'password.confirmed' => 'パスワードが一致しません。', 
            'postal_code.required' => '郵便番号を入力してください。',
            'address.required' => '住所を入力してください。',
        ]);
    
        
        $confirmationToken = Str::random(60);
    
        $vendor = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'email_verified_at' => null,
            'confirmation_token' => $confirmationToken,
            'postal_code' => $request->postal_code,
            'address' => $request->address,
        ]);
    
        DB::table('user_roles')->insert([
            'user_id' => $vendor->id,
            'role_id' => 3,
        ]);
    
        
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $latestCode = PromotionCode::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $day)
            ->latest('id')
            ->value('code');
    
        $incremental = $latestCode ? (int)substr($latestCode, -3) + 1 : 1;
        $promoCode = sprintf("%s%s%s%03d", $year, $month, $day, $incremental);
        $expirationDate = Carbon::now()->addMonths(2);
    
        PromotionCode::create([
            'user_id' => $vendor->id,
            'code' => $promoCode,
            'expires_at' => $expirationDate,
        ]);
    
       
        try {
            Mail::to($vendor->email)->send(new VendorConfirmationMail($vendor, $promoCode, $confirmationToken));
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', '確認メールの送信に失敗しました。もう一度お試しください。'); 
        }
    
        return redirect()->route('login')->with('success', '登録が完了しました！確認メールを送信しました。'); 
    }


    public function confirmEmail($token)
    {
        $user = User::where('confirmation_token', $token)->first();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid confirmation token.');
        }
        $user->email_verified_at = now();
        $user->confirmation_token = null;
        $user->email_confirmed_at = Carbon::now();
        $user->save();

        return redirect()->route('login')->with('success', 'Email confirmed successfully. You can now log in.');
    }
}
