@extends('includes.guest')
@section('style')
<style>
    form#register_form button.button {
        width: 100%;
    }

    span.invalid-feedback div#message {
        color: red;
    }

    .text-red-500 {
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


                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="first_name" id="first_name" placeholder="名" value="{{ old('first_name') }}" required maxlength="20">
                                </div>
                                @error('first_name')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" id="last_name" name="last_name" placeholder="姓" value="{{ old('last_name') }}" required maxlength="30">
                                </div>
                                @error('last_name')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="email" name="email" id="email" placeholder="メールアドレス" value="{{ old('email') }}" required maxlength="50">
                                </div>
                                @error('email')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12 input-group">
                            <div class="form-input">
                                <input 
                                    type="tel" 
                                    name="phone" 
                                    id="phone" 
                                    placeholder="電話番号" 
                                    value="{{ old('phone') }}" 
                                    maxlength="11" 
                                    pattern="[0-9]{11}" 
                                    required
                                    title="電話番号は11桁の数字で入力してください"
                                    oninvalid="this.setCustomValidity('電話番号は11桁の数字で入力してください')"
                                    oninput="this.setCustomValidity('')"
                                >
                            </div>
                            @error('phone')
                                <span class="invalid-feedback text-red-500">
                                    @if($message == 'The phone must be 11 characters.')
                                        電話番号は11桁で入力してください
                                    @elseif($message == 'The phone field is required.')
                                        電話番号を入力してください
                                    @elseif($message == 'The phone format is invalid.')
                                        電話番号は数字のみで入力してください
                                    @else
                                        {{ $message }}
                                    @endif
                                </span>
                            @enderror
                        </div>

                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="password" name="password" placeholder="パスワード" id="password" maxlength="20" required>
                                </div>
                                @error('password')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="password" name="password_confirmation" placeholder="パスワード確認" maxlength="20" required>
                                </div>
                                @error('password_confirmation')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="postal_code" id="postal_code" placeholder="郵便番号" value="{{ old('postal_code') }}" required maxlength="7">
                                </div>
                                @error('postal_code')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <textarea name="address" id="address" placeholder="住所" class="pt-15" required maxlength="100">{{ old('address') }}</textarea>
                                    <!-- <p id="addressCount" class="text-sm text-gray-500">0/100</p> -->
                                </div>
                                @error('address')
                                <span class="invalid-feedback text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                           
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