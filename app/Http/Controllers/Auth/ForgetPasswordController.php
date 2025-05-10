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
use App\Jobs\SendForgotPasswordMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forget-password');
    }

    public function sendResetLink(Request $request)
    {
        try{

            $key = 'sent|' . $request->ip();
            if (RateLimiter::tooManyAttempts($key, 5)) {
                return back()->withErrors([
                    'email' =>  'リセットリンクのリクエストが多すぎます。60秒後に再試行してください。',
                ])->onlyInput('email');
            }

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
                    'message' => "提供されたメールアドレスは、当社の記録と一致しません"
                ]);
            }

            DB::table('password_reset_tokens')->where('email', $user->email)->delete();

            $token = Str::random(60);

            DB::table('password_reset_tokens')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => now(),
            ]);

            RateLimiter::hit($key, 60);
            dispatch(new SendForgotPasswordMail($user, $token));

            return response()->json([
                'status' => true,
                'message' => 'リセットリンクが正常に送信されました。',
                'redirect' => route('show_sent_link_success',$user->email)
            ]);


        } catch (Exception $e) {
            Log::error('Sending reset password link failed', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'パスワードリセットリンクの送信中にエラーが発生しました。',
            ]);
        }
    }

    public function showSentLinkSuccess($email)
    {
        try{

            return view('Auth/sent-success',compact('email'));

        } catch (Exception $e) {
            Log::error('Showing reset link success form failed', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'リセットリンク成功フォームの表示中にエラーが発生しました。',
            ]);
        }
    }

    public function showResetForm($token)
    {
        try{

            return view('Auth/reset-password',compact('token'));

        } catch (Exception $e) {
            Log::error('Showing reset password form failed', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'パスワードリセットフォームの表示中にエラーが発生しました。',
            ]);
        }
    }

    public function reset(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'token' => 'required',
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
                    'message' => "提供されたメールアドレスは、当社の記録と一致しません"
                ]);
            }

            $user->password = Hash::make($request->password);
            $user->save();

            DB::table('password_reset_tokens')->where('email', $email)->delete();

            return response()->json([
                'status' => true,
                'message' => 'パスワードのリセットが成功しました',
                'redirect' => route('reset_success')
            ]);

        } catch (Exception $e) {
            Log::error('Reseting password failed', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => false,
                'message' => 'パスワードのリセット中にエラーが発生しました。',
            ]);
        }
    }

    public function success()
    {
        return view('auth.password-reset-success');
    }

}
