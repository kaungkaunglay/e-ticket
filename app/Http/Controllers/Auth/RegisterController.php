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
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
           
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
            return redirect()->back()->with('error', 'Failed to send confirmation email. Please try again.');
        }

        return redirect()->route('login')->with('success', 'Registration successful! Please check your email for confirmation.');
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
