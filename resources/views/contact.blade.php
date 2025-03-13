@extends('includes.layout')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('contents')

<section>
    <div class="relative container">
        <div class="row justify-center">
            <div class="col-xl-5 col-lg-7">
                <div class="text-22 fw-500 text-center py-20">
                    How Can I Help You?
                </div>
                <div class="row y-gap-20">
                    @foreach($supports as $support)
                    <div class="col-12">
                        <div class="form-select">
                            <div class="d-flex">
                                <input type="button" value="{{ $support->title }}" class="dropdown-toggle">
                            </div>
                            <div class="select-dropdown">
                                <ul>
                                    @if($support->questions->isNotEmpty())
                                    @foreach($support->questions as $question)
                                    <li><a href="#">{{ $question->description }}</a></li>
                                    @endforeach
                                    @else
                                    <li>No questions available</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        
            </div>
        </div>
    </div>
<form id="content-form" style="max-width: 700px; margin: 0 auto; padding: 20px; background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    @csrf
    <div class="form-group" style="margin-bottom: 20px;">
        <label for="name" style="display: block; font-size: 14px; font-weight: 500; color: #333; margin-bottom: 5px;">お名前</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="お名前を入力してください" required
               style="width: 100%; padding: 10px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s ease;">
    </div>

    <div class="form-group" style="margin-bottom: 20px;">
        <label for="email" style="display: block; font-size: 14px; font-weight: 500; color: #333; margin-bottom: 5px;">メールアドレス</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="メールアドレスを入力してください" required
               style="width: 100%; padding: 10px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s ease;">
    </div>

    <div class="form-group" style="margin-bottom: 20px;">
        <label for="phone" style="display: block; font-size: 14px; font-weight: 500; color: #333; margin-bottom: 5px;">電話番号 (任意)</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="電話番号を入力してください"
               style="width: 100%; padding: 10px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s ease;">
    </div>

    <div class="form-group" style="margin-bottom: 20px;">
        <label for="content_message" style="display: block; font-size: 14px; font-weight: 500; color: #333; margin-bottom: 5px;">メッセージ</label>
        <textarea id="content_message" name="content_message" class="form-control" rows="4" placeholder="メッセージを入力してください" required
                  style="width: 100%; padding: 10px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s ease; resize: vertical;"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6Lc-3_IqAAAAAI3J9HDpRgR6fyy-Y9IXwNAcYdhM"></div>
 
    <button type="submit" id="submit-button" class="btn btn-primary"
    style="width: 100%; padding: 12px; font-size: 16px; font-weight: 500; color: #fff; background-color: #007bff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
    送信
</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=ja" async defer></script>

<script>
   $(document).ready(function () {
    $('#content-form').submit(function (event) {
        event.preventDefault();

     
        var recaptchaResponse = grecaptcha.getResponse();

        if (!recaptchaResponse) {
            Swal.fire({
                icon: 'error',
                title: '認証エラー',
                text: 'reCAPTCHAを完了してください。',
                confirmButtonText: 'OK'
            });
            return;
        }

        var formData = {
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            content_message: $('#content_message').val(),
            _token: '{{ csrf_token() }}',
            'g-recaptcha-response': recaptchaResponse 
        };

        $.ajax({
            url: '{{ route('contents.page') }}',
            type: 'GET', 
            data: formData,
            success: function (response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: '送信成功',
                        text: 'メッセージが正常に送信されました。',
                        confirmButtonText: 'OK'
                    });
                    grecaptcha.reset(); 
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: '送信エラー',
                    text: 'メッセージの送信中にエラーが発生しました。もう一度お試しください。',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});

</script>
@endsection
