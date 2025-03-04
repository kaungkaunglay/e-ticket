@extends('includes.guest')
@section('style')
<style>
    form#login_form button.button {
        width: 100%;
    }

    span.invalid-feedback, div#message{
        color: red;
    }
</style>
@endsection
@section('contents')
    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                        <form id="login_form" method="POST">
                            @csrf
                            <div class="row y-gap-20">
                                <div class="col-12">
                                    <h1 class="text-22 fw-500">Forget Password</h1>
                                    <p class="mt-10">Do you remember it? <a href="{{ route('login') }}"
                                            class="text-blue-1">Log in</a></p>
                                </div>

                                <div class="col-12 input-group">

                                    <div class="form-input ">
                                        <input type="text" name="email" id="email" required>
                                        <label class="lh-1 text-14 text-light-1">Email</label>
                                    </div>

                                    <span class="invalid-feedback"></span>

                                </div>

                                <div class="col-12">
                                    <div class="text-center" id="message"></div>
                                </div>

                                <div class="col-12">

                                    <button type="submit" class="button py-20 -dark-1 bg-blue-1 text-white">
                                        Confirm <div class="icon-arrow-top-right ml-15"></div>
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
        });
    </script>
@endsection
