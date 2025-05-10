<section data-anim-wrap class="section-bg mt-4">
    <form id="subscribeForm" action="{{ route('notifynewupdate.post') }}" method="POST">
        @csrf
        {{-- <div data-anim-child="fade delay-1" class="section-bg__item -mx-20">
            <!-- <img src="{{ asset('assets/img/Subscribe.jpg') }}" alt="subscribe"> -->
        </div> --}}

        {{-- <div class="container bg-danger">
            hello
        </div> --}}

        <div class="container">
            <div class="subscribe-box rounded-4 px-5 pt-3 pb-4 text-center" style="background-color: #434343;">
                <i class="icon-newsletter text-60 sm:text-40 text-white"></i>
                <h3 class="lh-15 text-white fs-4 mt-10">{{ translate('notify_update_discount') }}</h3>
                <p class="text-white mt-2 mb-0" style="font-size: 13px">{{ translate('enter_email_send') }}</p>

                <div class="single-field d-flex flex-nowrap justify-center pt-1" style="max-width: 410px; margin: 0 auto;">
                    <div style="flex-grow: 1;">
                        <input class="email" type="email" name="email" placeholder="{{ translate('your_email') }}" required 
                               style="width: 100%; height: 35px; padding: 0 15px; border: none; border-radius: 0px;background-color:#D9D9D9;font-size:13px">
                    </div>
                    <div>
                        <button type="submit" class=" text-white" id="submitButton" 
                                style="background-color: #cf1111; border: none; padding: 0 10px; cursor: pointer; height: 35px;font-size:13px">
                            <span id="buttonText">{{ translate('subscribe') }}</span>
                            <span id="loadingSpinner" class="loading-spinner" style="display: none;">
                                <i class="fa fa-spinner fa-spin"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container">
            <div class="row items-center justify-center text-center bg-sub" style="background-color: #434343;">
                <div class="col-auto">
                    <i class="icon-newsletter text-60 sm:text-40 text-white"></i>

                    <h2 class="text-30 sm:text-24 lh-15 text-white mt-20">{{ translate('notify_update_discount') }}</h2>
                    <p class="text-white mt-5">{{ translate('enter_email_send') }}</p>

                    <div class="single-field d-flex flex-nowrap justify-center pt-30" style="max-width: 410px; margin: 0 auto;">
                        <div style="flex-grow: 1;">
                            <input class="bg-white h-60" type="email" name="email" placeholder="{{ translate('your_email') }}" required 
                                   style="width: 100%; height: 60px; padding: 0 15px; border: none; border-radius: 4px 0 0 4px;">
                        </div>
                        <div>
                            <button type="submit" class="h-60 text-white" id="submitButton" 
                                    style="background-color: #ff0000; border: none; padding: 0 25px; border-radius: 0 4px 4px 0; cursor: pointer; height: 60px;">
                                <span id="buttonText">{{ translate('subscribe') }}</span>
                                <span id="loadingSpinner" class="loading-spinner" style="display: none;">
                                    <i class="fa fa-spinner fa-spin"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
  

    </form>
    
</section>
<div class="footer1 d-flex justify-content-between align-items-center" style="padding: 24px;font-size: 12px;">
    新鮮なお魚が、おろし価格で購入ができるサイトはこちら→ 
    <img src="{{ asset('assets/img/general/216415.jpg') }}" width="50" height="50" />
</div>
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