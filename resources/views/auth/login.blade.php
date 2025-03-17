@extends('includes.guest')
@section('style')
<style>
    form#login_form button.button {
        width: 100%;
    }

    span.invalid-feedback,
    div#message {
        color: red;
    }

    .loading {
        animation: bounce 1s ease-in-out 0.5s infinite;
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
<section class="pt-50 pb-50 bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4" style="border-radius: 20px;">
                    <form id="login_form" action="{{ locale_route('login.store') }}" method="POST">
                        @csrf
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500 text-center">{{ translate('login') }}</h1>
                                <p class="text-center">{{ translate('welcome') }}</p>
                            </div>

                            <!-- Email Input -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="email" id="email" placeholder="{{ translate('email') }}" value="{{ old('email') }}" required>
                                </div>
                                @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="password" name="password" id="password" placeholder="{{ translate('password') }}" required>
                                </div>
                                @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="button py-20 -dark-1 bg-red text-white">
                                    {{ translate('log_in') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Social Login Section -->
                    <div class="row y-gap-20 pt-30">
                        <div class="col-12">
                            <div class="text-center">{{ translate('or_sign_in_with') }}</div>

                            <!-- LINE Login Button -->
                            <a href="{{ route('auth.line') }}" class="button col-12 -line-color text-line-green py-5 rounded-8 mt-10">
                                <img src="{{ asset('assets/img/icons/line.svg') }}" alt="line" class="mr-10">
                                {{ translate('login_with_line') }}
                            </a>

                            <!-- Social Icons -->
                            <div class="login-icons mt-10">
                                <a href="#">
                                    <img src="{{ asset('assets/img/icons/facebook.svg') }}" alt="Facebook Login">
                                </a>
                                <a href="{{ route('google.login') }}">
                                    <img src="{{ asset('assets/img/icons/google.svg') }}" alt="Google Login">
                                </a>
                            </div>
                        </div>

                        <!-- Registration and Forgot Password Links -->
                        <p class="mt-10 text-center">{{ translate('dont_have_account') }} <a href="{{ locale_route('signup') }}" class="text-blue-1">{{ translate('register') }}</a></p>
                        <div class="col-12 text-center">
                            <a href="{{ locale_route('forget_password') }}" class="text-14 fw-500 text-blue-1 underline">{{ translate('forgot_password') }}</a>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="col-12">
                            <div class="text-center px-30">{{ translate('agree_terms') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection