@extends('layouts.app')

@section('contents')

<style>
    .modal-confirmation {
        text-align: center;
        padding: 30px;
    }
    .confirmation-icon {
        font-size: 50px;
        /* color: #28a745; */
        margin-bottom: 20px;
    }
    .confirmation-message {
        font-size: 18px;
        margin-bottom: 15px;
    }
    .confirmation-footer {
        margin-top: 30px;
        /* border-top: 1px solid #eee; */
        padding-top: 20px;
    }
    .nav-link {
        /* color: #007bff; */
        text-decoration: none;
    }
</style>

<!-- Button to trigger modal (for demo purposes) -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">
    予約確認モーダルを表示
</button> --}}


<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-confirmation">
                <i class="fa-solid fa-check text-white bg-primary rounded-circle p-3 fs-3 mx-auto mb-4"></i>
                {{-- <div class="confirmation-icon text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                </div> --}}
                <h4 class="modal-title mb-1 fw-bold" id="reservationModalLabel">ご予約が確定しました！</h4>
                <div class="confirmation-message fw-bold">
                    <p>ご来店を心よりお待ちしております。</p>
                    <p>ご予約内容はメールでもご確認頂けます。</p>
                </div>
                <div class="confirmation-footer">
                    <div class="d-flex justify-content-center gap-4">
                        <a href="#" class="btn btn-success w-50">ホーム</a>
                        <a href="#" class="btn btn-danger w-50">レストラン一覧</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <div class="box bg-white border position-absolute w-75 p-4 text-center rounded-3" style="top: 300px;margin:0px 50px;">
        <i class="fa-solid fa-check text-white bg-primary rounded-circle p-2 fs-3 mx-auto"></i>
        <p style="font-size:12px">ご予約が確定しました！<br> ご来店を心よりお待ちしております。</p>
        <p style="font-size:12px">ご予約内容はメールでもご確認頂けます。</p>
        <div class="">
            <button>ホーム</button>
            <button>レストラン一覧</button>
        </div>
    </div> --}}
    <section class="p-3">
        <h5 class="d-flex border-bottom border-danger">
            <p class="text-danger fw-bold me-2">アンジェロ</p>
            <p class="fw-400">Angelo</p>
        </h5>
        <p class="my-2 fw-semibold">来店日時　2025年 3月 <span class="fs-3">23</span>日 (日) 19:00</p>

        <ul class="list-unstyled">
            <li>
                <div class="d-flex"><i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle me-3" style="font-size: 10px"></i>
                    <h6 class="m-0 fw-bold">ご予約人数の内訳</h6>
                </div>
                <div class="ms-4 ps-2">
                    <p class="my-1" style="font-size: 13px">予約人数 <span class="fw-bold fs-3">2</span>名(お子様不可)</p>
                    <p class="bg-warning text-white px-3 py-2 mt-2" style="font-size: 8px">こちらの店舗ではお子様のご予約は受け付けておりません。詳しくは店舗情報の「お子様連れ」をご確認ください。</p>
                </div>
            </li>
            <li>
                <div class="d-flex"><i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle me-3" style="font-size: 10px"></i>
                    <h6 class="m-0 fw-bold">席の選択</h6>
                </div>
                <div class="ms-4 ps-2">
                    <p class="my-2" style="font-size: 13px">テーブル席/禁煙<i class="fa-solid fa-ban-smoking ms-3 fs-5 fw-bold"></i></p>
                </div>
            </li>
            <li>
                <div class="d-flex"><i class="fa-solid fa-check text-white bg-primary p-1 rounded-circle me-3" style="font-size: 10px"></i>
                    <h6 class="m-0 fw-bold">その他の情報の入力</h6>
                </div>
                <div class="ms-4 ps-2">
                    <p class="my-2" style="font-size: 13px">予約者情報 <span class="bg-danger rounded-4 text-white px-1" style="font-size: 10px">必須</span></p>
                    <form action="" class="bg-secondary-subtle p-3 me-4">
                        <div class="row mt-1">
                            <div class="col-4 justify-center"><label for="" style="font-size: 10px">お名前</label></div>
                            <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75 border-0"></div>
                            <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75 border-0"></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-4 justify-center"><label for="" style="font-size: 10px">お名前(かな)</label></div>
                            <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75 border-0"></div>
                            <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75 border-0"></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-4 justify-center"><label for="" style="font-size: 10px">電話番号</label></div>
                            <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75 border-0"></div>
                           
                        </div>
                        <div class="row mt-1">
                            <div class="col-4 justify-center"><label for="" style="font-size: 10px">メールアドレス</label></div>
                            <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75 border-0"></div>
                            
                        </div>
                        <div class="row mt-1">
                            <div class="col-4 justify-center"><label for="" style="font-size: 10px">レストランへのご要望</label></div>
                            <div class="col-8 align-content-center">
                                <textarea class="border-0 w-75" name="" id="" cols="20" rows="2" style="resize: none"></textarea>
                            </div>
                            {{-- <div class="col-4 align-content-center"><input type="text" name="" id="" class="w-100 h-75"></div> --}}
                            
                        </div>
                    </form>
                    <p class="bg-warning text-white px-3 py-2 mt-2" style="font-size: 8px">お手数ですが、ご予約の詳細をご確認いただきますようお願いいたします。</p>
                    <div class="bg-secondary-subtle p-3 me-4">
                        <p class="fw-bold text-center" style="font-size: 8px">予約成立後にお店へ連絡なくキャンセルされると、サービスのご利用を制限させていただく場合があります。 また、予約時にご登録いただいた連絡先が無効な場合、お店の判断により予約がキャンセルとなることがあります。</p>
                        <p class="bg-white px-3 py-1 fw-bold text-center" style="font-size: 12px">来店日時 <span class="fw-bold fs-6">2025</span>年 <span class="fw-bold fs-6">3</span>月 <span class="fw-bold fs-6">23</span>日 (日) <span class="fw-bold fs-6">19:00</span> 来店人数 <span class="fw-bold fs-6">2</span>名</p>
                        <p class="col-9 mx-auto bg-danger text-white px-2 py-1 text-center rounded-3" style="font-size: 10px">利用規約·同意事項·注意事項に同意し、上記内容で <br><span style="font-size: 15px">予約する</span></p>
                    </div>
                </div>
            </li>
        </ul>
    </section>
@endsection
