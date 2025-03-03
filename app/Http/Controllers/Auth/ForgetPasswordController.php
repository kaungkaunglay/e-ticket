<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forget-password');
    }

    public function sendResetLink(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'email' => 'required|email',
            ]);

            if($validator->fails()){
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()
                ]);
            }

            $user = User::where('email',$request->email)->first();

            if(!$user)
            {
                return response()->json([
                    'status' => false,
                    'message' => "Provided email doest not match our record"
                ]);
            }

            DB::table('password_reset_tokens')->where('email', $user->email)->delete();

            $token = Str::random(60);

            DB::table('password_reset_tokens')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => now(),
            ]);

            Mail::to($user->email)->send(new ForgotPasswordMail($user,$token));

            return response()->json([
                'status' => true,
                'message' => 'Reset Link Sent',
            ]);


        } catch (Exception $e) {
            Log::error('Sending reset password link failed', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during sending password reset link.',
            ]);
        }
    }

    public function reset(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'password' => 'required|min:8|confirmed'
            ]);

            if($validator->fails()){
                return response()->json(['status' => false, 'errors' => $validator->errors()]);
            }

            $resetRecord = DB::table('password_reset_tokens')->where('token', $request->token)->first();

            if (!$resetRecord) {
                return response()->json(['status' => false, 'message' => 'Invalid or expired reset token']);
            }

            $email = $resetRecord->email;

            $user = User::where('email', $email)->first();

            if(!$user)
            {
                return response()->json([
                    'status' => false,
                    'message' => "Provided email doest not match our record"
                ]);
            }

            $user->password = Hash::make($request->password);
            $user->save();

            DB::table('password_reset_tokens')->where('email', $email)->delete();

            return response()->json([
                'status' => true,
                'message' => 'Password Reset Success'

            ]);

        } catch (Exception $e) {
            Log::error('Reseting password failed', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'An error occurred during reseting password.',
            ]);
        }
    }

    public function success()
    {
        return view('email.password-reset-success');
    }

}
