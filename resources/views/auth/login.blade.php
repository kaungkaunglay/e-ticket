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
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <form id="login_form" action="{{locale_route('login.store') }}" method="POST">
                        @csrf
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500">{{translate('welcome_back')}}</h1>
                                <p class="mt-10">{{translate('dont_have_account')}} <a href="{{locale_route('signup') }}"
                                        class="text-blue-1">{{translate('register')}}</a></p>
                            </div>

                            <div class="col-12 input-group">

                                <div class="form-input ">
                                    <input type="text" name="email" id="email" required>
                                    <label class="lh-1 text-14 text-light-1">{{translate('email')}}</label>
                                </div>

                                @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 input-group">

                                <div class="form-input ">
                                    <input type="password" name="password" id="password" required>
                                    <label class="lh-1 text-14 text-light-1">{{translate('password')}}</label>
                                </div>

                                @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="col-12">
                                <a href="{{locale_route('forget_password') }}"
                                    class="text-14 fw-500 text-blue-1 underline">{{translate('forgot_password')}}</a>
                            </div>

                            <div class="col-12">
                                <div class="text-center" id="message">
                                    @if ($errors->any())
                                    <span class="invalid-feedback">{{ $errors->first() }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-12">

                                <button type="submit" class="button py-20 -dark-1 bg-blue-1 text-white">
                                {{translate('log_in')}} <div class="icon-arrow-top-right ml-15"></div>
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

<!-- <section class="layout-pt-md layout-pb-md bg-dark-2">
              <div class="container">
                <div class="row y-gap-30 justify-between items-center">
                  <div class="col-auto">
                    <div class="row y-gap-20  flex-wrap items-center">
                      <div class="col-auto">
                        <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                      </div>

                      <div class="col-auto">
                        <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                        <div class="text-white">Sign up and we'll send the best deals to you</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                      <div>
                        <input class="bg-white h-60" type="text" placeholder="Your Email">
                      </div>

                      <div>
                        <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
@endsection

@section('script')
<!-- <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#login_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var form = $(this);

                $.ajax({
                    url: "{{locale_route('login') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        const button = form.find('button[type="submit"]');
                        button.prop('disabled', true);
                        button.find('div.icon-arrow-top-right').addClass('loading');
                    },
                    success: function(response) {
                                            if (response.status) {
                                                window.location.href = response.redirect;
                                            } else {

                                                $('#message').html(response.message ?? '');

                                                var errors = response.errors ?? '';

                                                var fields = [
                                                    'email',
                                                    'password'
                                                ];

                                                fields.forEach(function(field) {
                                                    const inputGroup = $(`#${field}`).closest(
                                                        '.input-group');
                                                    const errorSpan = inputGroup.find(
                                                        'span.invalid-feedback');

                                                    if (errors[field]) {
                                                        errorSpan.addClass('d-block').html(errors[field]);
                                                    } else {
                                                        errorSpan.removeClass('d-block').html('');
                                                    }
                                                });
                                            }
                    },
                    complete: function() {
                        const button = form.find('button[type="submit"]');
                        button.find('button[type="submit"]').prop('disabled', false);
                        button.find('div.icon-arrow-top-right').removeClass('loading');
                    }
                });
            });
        });
    </script> -->
@endsection