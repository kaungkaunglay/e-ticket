
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
                    <form action="{{ locale_route('vendor.register.submit') }}" method="POST">
                        @csrf
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500">{{translate('sign_in_or_create_account')}}</h1>
                                <p class="mt-10">{{translate('already_have_account')}} <a href="{{route('login')}}" class="text-blue-1">{{translate('log_in')}}</a>
                                </p>
                            </div>

                            <div class="col-12 input-group">

                                <div class="form-input ">
                                    <input type="text" name="first_name" id="first_name" required>
                                    <label class="lh-1 text-14 text-light-1">{{translate('shop_name')}}</label>
                                </div>

                                <span class="invalid-feedback"></span>

                            </div>

                            <div class="col-12 input-group">

                                <div class="form-input ">
                                    <input type="text" name="email" id="email" required>
                                    <label class="lh-1 text-14 text-light-1">{{translate('email')}}</label>
                                </div>

                                <span class="invalid-feedback"></span>

                            </div>

                            <div class="col-12 input-group">

                                <div class="form-input ">
                                    <input type="password" name="password" id="password" required>
                                    <label class="lh-1 text-14 text-light-1">{{translate('password')}}</label>
                                </div>

                                <span class="invalid-feedback"></span>

                            </div>

                            <div class="col-12 input-group">
                                <div class="form-input ">
                                    <input type="password" name="password_confirmation" required>
                                    <label class="lh-1 text-14 text-light-1">{{translate('confirm_password')}}</label>
                                </div>
                                <span class="invalid-feedback"></span>
                            </div>

                            {{-- <div class="col-12">

                                    <div class="d-flex ">
                                        <div class="form-checkbox mt-5">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-15 text-light-1 ml-10">Email me exclusive Agoda promotions. I
                                            can opt out later as stated in the Privacy Policy.</div>

                                    </div>

                            </div> --}}

                            <div class="col-12">
                                <div class="text-center" id="message"></div>
                            </div>

                            <div class="col-12">

                                <button type="submit" class="button text-center py-20 -dark-1 bg-blue-1 text-white">
                                {{translate('register')}} <div class="icon-arrow-top-right ml-15"></div>
                                </button>

                            </div>


                        </div>
                    </form>

                    <div class="row y-gap-20 pt-30">
                        <div class="col-12">
                            <div class="text-center">{{translate('or_sign_in_with')}}</div>

                            <button class="button col-12 -outline-blue-1 text-blue-1 py-15 rounded-8 mt-10">
                                <i class="icon-apple text-15 mr-10"></i>
                                Facebook
                            </button>

                            <button class="button col-12 -outline-red-1 text-red-1 py-15 rounded-8 mt-15">
                                <i class="icon-apple text-15 mr-10"></i>
                                Google
                            </button>

                            <button class="button col-12 -outline-dark-2 text-dark-2 py-15 rounded-8 mt-15">
                                <i class="icon-apple text-15 mr-10"></i>
                                Apple
                            </button>
                        </div>

                        <div class="col-12">
                            <div class="text-center px-30">{{translate('agree_terms')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection