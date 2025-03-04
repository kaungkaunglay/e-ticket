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

        .success-icon-container {
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .success-icon {
            font-size: 4rem;
            color: #28a745;
            animation: scaleIn 0.5s ease-in-out, bounce 1s ease-in-out 0.5s;
        }

        .card-header {
            background-color: #f8f9fa;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            80% {
                transform: scale(1.2);
                opacity: 1;
            }

            100% {
                transform: scale(1);
            }
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

        .pop-in {
            animation: popIn 0.8s ease-in-out 0.3s both;
            opacity: 0;
        }

        @keyframes popIn {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out 0.6s both;
            opacity: 0;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
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
                        <form id="sent_reset_link_form" method="POST">
                            @csrf
                            <div class="row y-gap-20">

                                <div class="col-12 text-center py-5">
                                    <div class="success-icon-container mb-2">
                                        <div class="success-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h2 class="card-title mb-3 pop-in">Success!</h2>
                                    <p class="card-text mb-3 pop-in" style="animation-delay: 0.4s;">Reset link sent
                                        successfully.</p>
                                </div>

                                <div class="col-12 input-group">
                                    <div class="form-input ">
                                        <input type="hidden" name="email" id="email" value="{{ $email }}"
                                            required >
                                    </div>
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="col-12">
                                    <div class="text-center" id="message"></div>
                                </div>

                                <div class="col-12">

                                    <button type="submit" class="button py-20 -dark-1 bg-blue-1 text-white">
                                        Resent Link <div class="icon-arrow-top-right ml-15"></div>
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
                        form.find('button[type="submit"]').prop('disabled', true);
                    },
                    success: function(response) {
                        if (response.status) {
                            console.log(response.message);
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
                        form.find('button[type="submit"]').prop('disabled', false);
                    }
                });
            });
        });
    </script>
@endsection
