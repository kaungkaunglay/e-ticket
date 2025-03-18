@extends('includes.guest')
@section('style')
<style>
    form#register_form button.button {
        width: 100%;
    }

    span.invalid-feedback div#message {
        color: red;
    }

    .loading {
        animation: bounce 1s ease-in-out 0.5s infinite;
    }

    .button {
        width: 100% !important;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-20px);
        }

        60% {
            transform: translateY(-10px);
        }

    }

    
</style>
@endsection
@section('contents')
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <form action="{{ locale_route('register') }}" method="POST" id="registrationForm">
                        @csrf
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500 text-center">登録</h1>
                                <p class="mt-10 text-center">すでにアカウントをお持ちですか？<a href="{{ route('login') }}" class="text-blue-1">ログイン</a></p>
                            </div>

                            <!-- First Name -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="first_name" id="first_name" placeholder="名" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('first_name') }}</span>
                            </div>

                            <!-- Last Name -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" id="last_name" name="last_name" placeholder="姓" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('last_name') }}</span>
                            </div>

                            <!-- Email -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="email" id="email" placeholder="メールアドレス" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                            </div>

                            <!-- Phone -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="number" name="phone" id="phone" placeholder="電話番号" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('phone') }}</span>
                            </div>

                            <!-- Password -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="password" name="password" placeholder="パスワード" id="password" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="password" name="password_confirmation" placeholder="パスワード確認" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('password_confirmation') }}</span>
                            </div>

                            <!-- Postal Code -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="postal_code" id="postal_code" placeholder="郵便番号" required>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('postal_code') }}</span>
                            </div>

                            <!-- Address -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <textarea name="address" id="address" placeholder="住所" class="pt-15" required></textarea>
                                </div>
                                <span class="invalid-feedback">{{ $errors->first('address') }}</span>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="button text-center py-15 -dark-1 bg-red text-white">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection