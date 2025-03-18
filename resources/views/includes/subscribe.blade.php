<section data-anim-wrap class="section-bg layout-pt-lg layout-pb-lg">
    <form id="subscribeForm" action="{{ route('notifynewupdate.post') }}" method="POST">
        @csrf
        <div data-anim-child="fade delay-1" class="section-bg__item -mx-20">
            <img src="{{ asset('assets/img/Subscribe.jpg') }}" alt="subscribe">
        </div>

        <div class="container">
            <div data-anim-child="slide-up delay-2" class="row items-center justify-center text-center bg-sub">
                <div class="col-auto">
                    <i class="icon-newsletter text-60 sm:text-40 text-white"></i>

                    <h2 class="text-30 sm:text-24 lh-15 text-white mt-20">{{ translate('notify_update_discount') }}</h2>
                    <p class="text-white mt-5">{{ translate('enter_email_send') }}</p>

                    <div class="single-field -w-410 d-flex x-gap-10 flex-wrap y-gap-20 pt-30">
                        <div class="col-auto">
                            <input class="col-12 bg-white h-60" type="email" name="email" placeholder="{{ translate('your_email') }}" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="button -md -white h-60 bg-dark-1 text-white" id="submitButton">
                                <span id="buttonText">{{ translate('subscribe') }}</span>
                                <span id="loadingSpinner" class="loading-spinner" style="display: none;">
                                    <i class="fa fa-spinner fa-spin"></i> <!-- Font Awesome spinner -->
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
    $(document).ready(function() {
        toastr.options = {
            closeButton: true, 
            progressBar: true,
            positionClass: 'toast-top-right', 
            timeOut: 5000,
            extendedTimeOut: 1000, 
        };

       
        $('#subscribeForm').submit(function(event) {
            event.preventDefault(); 

           
            $('#submitButton').prop('disabled', true);
            $('#buttonText').hide();
            $('#loadingSpinner').show();

            let email = $('input[name="email"]').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('notifynewupdate.post') }}',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status === 'success') {
                    
                        toastr.success(response.message || '登録が完了しました！');
                    } else {
                        toastr.error(response.message || '登録に失敗しました。もう一度お試しください。'); 
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('登録中に問題が発生しました。後でもう一度お試しください。'); 
                },
                complete: function() {
                    $('#submitButton').prop('disabled', false);
                    $('#buttonText').show();
                    $('#loadingSpinner').hide();
                }
            });
        });
    });
</script>

<style>
    .loading-spinner {
        margin-left: 10px;
    }

    .loading-spinner .fa-spinner {
        font-size: 18px;
    }
</style>