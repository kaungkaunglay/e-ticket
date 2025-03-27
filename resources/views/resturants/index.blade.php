@extends('layouts.app')

@section('contents')

    <div class="row p-3 mt-1">

        @for ($x=0;$x<10;$x++)
            {{-- card --}}
        <div class="col-12 my-2" style="height: 124px;">
            <div class="d-flex gap-3 justify-content-between">
                {{-- image --}}
                <div class="" style="width: 40%; height: 124px;">
                    <img src="{{ asset('assets/img/foods/food.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;" alt="">
                </div>
                {{-- /image --}}

                {{-- content --}}
                <div class="" style="width: 60%;">
                    <div class="d-flex justify-content-between align-items-start">
                        <small class="fw-bold t-small">銀座 芝濱</small>
                        <div class="d-flex align-items-start gap-2">
                            <small class="fw-bold t-small">
                                <i class="fa-solid fa-utensils"></i>
                            </small>
                            <small class="fw-bold  t-small">～</small>
                            <small class="text-primary fw-bold  t-small">￥ 10,000</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="w-50 t-8" >
                            銀座8-12-5 峯田ビル B1F
                            <a href="javascript:void(0);" class="t-10 d-block mt-1">地図を表示</a>
                        </div>
                        <div class="w-50">
                            <button class="w-100 btn btn-danger rounded-0 t-5">
                                空き状況を見る 
                            </button>
                        </div>
                    </div>
                    <div class="m-0">
                        <p class="t-8 m-0">レストランについて</p>
                        <p class="t-8 m-0" >東京メトロ銀座駅と東銀座駅より徒歩5分ほどの場所にある隠れ家的な寿司割烹「銀座..</p>
                    </div>
                    <div class="m-0 d-flex align-items-start flex-wrap mt-1">
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                            WiFi利用可
                        </span>
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                            駐車場あり
                        </span>
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                            喫煙
                        </span>
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                            屋外席あり
                        </span>
                    </div>
                    
                    
                </div>
                {{-- /content --}}
            </div>
        </div>
        {{-- /card --}}
        @endfor

        

    </div>

@endsection
