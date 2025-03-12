<section data-anim-wrap class="section-bg layout-pt-lg layout-pb-lg">
    <form action="{{ route('notifynewupdate.post') }}" method="POST">
        @csrf
        <div data-anim-child="fade delay-1" class="section-bg__item -mx-20">
            <img src="{{asset('assets/img/Subscribe.jpg')}}" alt="subscribe">
        </div>

        <div class="container">
            <div data-anim-child="slide-up delay-2" class="row items-center justify-center text-center bg-sub">
                <div class="col-auto">
                    <i class="icon-newsletter text-60 sm:text-40 text-white"></i>

                    <h2 class="text-30 sm:text-24 lh-15 text-white mt-20">{{translate('notify_update_discount')}}</h2>
                    <p class="text-white mt-5">{{translate('enter_email_send')}}</p>

                    <div class="single-field -w-410 d-flex x-gap-10 flex-wrap y-gap-20 pt-30">
                        <div class="col-auto">
                            <!-- Add name="email" to the input field -->
                            <input class="col-12 bg-white h-60" type="email" name="email" placeholder="{{translate('your_email')}}" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="button -md -white h-60 bg-dark-1 text-white">{{translate('subscribe')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            let email = $('input[name="email"]').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('notifynewupdate.post') }}',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Check if the response indicates success
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Subscribed!',
                            text: response.message, // Show the success message from the server
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error here
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'There was an issue with your subscription. Please try again later.',
                    });
                }
            });
        });
    });
</script>

