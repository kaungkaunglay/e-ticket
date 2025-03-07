@extends('includes.guest')
@section('style')
<style>
    form#admin_login_form button.button {
        width: 100%;
    }

    span.invalid-feedback,
    div#message {
        color: red;
    }

    .button {
        width: 100% !important;
    }
</style>
@endsection

@section('contents')
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <form action="{{ locale_route('admin.index') }}" method="POST">
                        @csrf
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500">Admin Login</h1>
                                <p class="mt-10">Only authorized admins can access this panel.</p>
                            </div>

                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="text" name="email" id="email" required>
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="col-12 input-group">
                                <div class="form-input">
                                    <input type="password" name="password" id="password" required>
                                    <label class="lh-1 text-14 text-light-1">Password</label>
                                </div>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="col-12">
                                <a href="{{ route('forget_password')}}" class="text-14 fw-500 text-blue-1 underline">Forgot password?</a>
                            </div>

                            <div class="col-12">
                                <div class="text-center" id="message"></div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="button py-20 -dark-1 bg-blue-1 text-white">
                                    Sign In <div class="icon-arrow-top-right ml-15"></div>
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
<!-- <script>
    $(document).ready(function() {
        $("#admin_login_form").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.login') }}",
                type: 'POST',
                dataType: 'json',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status) {
                        window.location.href = response.redirect;
                    } else {
                        $('#message').html(response.message);
                    }
                }
            });
        });
    });
</script> -->
@endsection