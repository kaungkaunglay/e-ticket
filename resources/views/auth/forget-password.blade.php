@extends('includes.guest')
@section('style')
    <style>
        form button.button {
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
<section class="layout-pt-lg layout-pb-lg bg-blue-2" style="height: 100vh;">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <form id="sent_reset_link_form" method="POST">
                        @csrf
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500 text-center">パスワードを忘れた場合</h1>
                            </div>

                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="email" id="email" placeholder="メールアドレス" required>
                                </div>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="col-12">
                                <div class="text-center" id="message"></div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="button py-20 -dark-1 bg-red text-white">
                                    確認
                                </button>
                                <p class="mt-10 text-center">思い出しましたか？ <a href="{{ route('login') }}" class="text-blue-1">ログイン</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#sent_reset_link_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var form = $(this);

                $.ajax({
                    url: "{{ route('sent_reset_link') }}",
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
                                'email'
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
    </script>
@endsection
