@extends('layouts.app')

@section('contents')
<style>
    .loading-spinner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        white-space: nowrap;
        display: none;
        color: white;
    }

    .button-text {
        transition: opacity 0.3s;
    }

    .is-loading .button-text {
        opacity: 0;
    }

    .is-loading .loading-spinner {
        display: block !important;
    }

    #submit-button {
        position: relative;
        min-height: 60px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<section class="p-3">
    <h5 class="d-flex border-bottom border-danger">
        <p class="text-danger fw-bold me-2">{{ $restaurant->name }}</p>
        <p class="fw-400">{{ $restaurant->address }}</p>
    </h5>
    <p class="my-2 fw-semibold">来店日時　2025年 3月 <span class="fs-3">23</span>日 (日) 19:00</p>
    <p class="fw-400"> ¥{{ number_format($restaurant->price_range) }}</p>

    <ul class="list-unstyled">
        <li>
            <div class="d-flex">
                <i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle me-3" style="font-size: 10px"></i>
                <h6 class="m-0 fw-bold">ご予約人数の内訳</h6>
            </div>
            <div class="ms-4 ps-2">
                <p class="my-1" style="font-size: 13px">予約人数 <span class="fw-bold fs-3">2</span>名(お子様不可)</p>
                <p class="bg-warning text-white px-3 py-2 mt-2" style="font-size: 8px">こちらの店舗ではお子様のご予約は受け付けておりません。詳しくは店舗情報の「お子様連れ」をご確認ください。</p>
            </div>
        </li>
        <li>
            <div class="d-flex">
                <i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle me-3" style="font-size: 10px"></i>
                <h6 class="m-0 fw-bold">席の選択</h6>
            </div>
            <div class="ms-4 ps-2">
                <p class="my-2" style="font-size: 13px">
                    テーブル席/禁煙
                    @if($restaurant->smoking == 1)
                    喫煙可 <i class="fa-solid fa-smoking ms-3 fs-5 fw-bold"></i>
                    @else
                    禁煙 <i class="fa-solid fa-ban-smoking ms-3 fs-5 fw-bold"></i>
                    @endif
                </p>
            </div>
        </li>
        <li>
            <div class="d-flex">
                <i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle me-3" style="font-size: 10px"></i>
                <h6 class="m-0 fw-bold">その他の情報の入力</h6>
            </div>
            <div class="ms-4 ps-2">
                <p class="my-2" style="font-size: 13px">予約者情報 <span class="bg-danger rounded-4 text-white px-1" style="font-size: 10px">必須</span></p>
                <form action="{{ route('booking.save') }}" method="POST" class="bg-secondary-subtle p-3 me-4" id="booking-form">
                    @csrf
                    <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                    <input type="hidden" name="select_date" value="2025-03-23 19:00:00">

                    <div class="row mt-1">
                        <div class="col-4 justify-center">
                            <label style="font-size: 10px">お名前</label>
                        </div>
                        <div class="col-4 align-content-center">
                            <input type="text" name="first_name" class="w-100 h-75 border-0" value="{{ auth()->user()->first_name }}">
                        </div>
                        <div class="col-4 align-content-center">
                            <input type="text" name="last_name" class="w-100 h-75 border-0" value="{{ auth()->user()->last_name }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-4 justify-center"><label style="font-size: 10px">お名前(かな)</label></div>
                        <div class="col-4 align-content-center"><input type="text" name="first_name_kana" class="w-100 h-75 border-0"></div>
                        <div class="col-4 align-content-center"><input type="text" name="last_name_kana" class="w-100 h-75 border-0"></div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-4 justify-center"><label style="font-size: 10px">電話番号</label></div>
                        <div class="col-8 align-content-center">
                            <input type="tel" name="phone" class="w-100 h-75 border-0" value="{{ auth()->user()->phone }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-4 justify-center"><label style="font-size: 10px">メールアドレス</label></div>
                        <div class="col-8 align-content-center">
                            <input type="email" name="email" class="w-100 h-75 border-0" value="{{ auth()->user()->email }}">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-4 justify-center">
                            <label style="font-size: 10px">レストランへのご要望</label>
                        </div>
                        <div class="col-8 align-content-center">
                            <textarea class="border-0 w-75" name="note" cols="20" rows="2" style="resize: none"></textarea>
                        </div>
                    </div>
                    <p class="bg-warning text-white px-3 py-2 mt-2" style="font-size: 8px">お手数ですが、ご予約の詳細をご確認いただきますようお願いいたします。</p>
                    <div class="bg-secondary-subtle p-3 me-4">
                        <p class="fw-bold text-center" style="font-size: 8px">予約成立後にお店へ連絡なくキャンセルされると、サービスのご利用を制限させていただく場合があります。 また、予約時にご登録いただいた連絡先が無効な場合、お店の判断により予約がキャンセルとなることがあります。</p>
                        <p class="bg-white px-3 py-1 fw-bold text-center" style="font-size: 12px">来店日時 <span class="fw-bold fs-6">2025</span>年 <span class="fw-bold fs-6">3</span>月 <span class="fw-bold fs-6">23</span>日 (日) <span class="fw-bold fs-6">19:00</span> 来店人数 <span class="fw-bold fs-6">2</span>名</p>

                        <button type="submit" class="button -md -dark-1 bg-red h-50 text-white mt-30 col-9 mx-auto bg-danger text-white px-2 py-1 text-center rounded-3"
                            style="width: 286px;"
                            id="submit-button">
                            <span class="button-text">
                                利用規約·同意事項·注意事項に同意し、上記内容で <br>
                                <span style="font-size: 15px">予約する</span>
                            </span>
                            <span class="loading-spinner">
                                <i class="fas fa-circle-notch fa-spin me-2"></i> 処理中...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('booking-form');
        const submitButton = document.getElementById('submit-button');

        if (form) {
            form.addEventListener('submit', function(e) {

                submitButton.classList.add('is-loading');
                submitButton.disabled = true;


            });
        }


        @if($errors - > any())
        if (submitButton) {
            submitButton.classList.remove('is-loading');
            submitButton.disabled = false;
        }
        @endif
    });
</script>
@endsection