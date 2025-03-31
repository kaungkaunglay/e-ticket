@php
    use Illuminate\Support\Facades\Route;
@endphp
<div class="row bg-white margin-0">
    <div class="col-12">
        <div class="row p-3">
            <div class="col-11">
                {{-- <div class=" px-2 d-flex justify-content-between border border-2 rounded-0 border-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                    <div class="" style="width: 15%">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="form-group t-small" style="width: 75%">
                        全国 ラーメン
                    </div>
                    <div class="" style="width: 10%">
                        <small class="t-red t-small  ">検索</small>
                    </div> 

                    
                </div>--}}
                <div class="row border border-2 rounded-0 border-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                    <div class="col-1">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="col-8 t-small">
                        全国 ラーメン
                    </div>
                    <div class="col-2 t-red t-small" style="
    margin-left: 26px;
">
                        検索
                    </div>
                </div>
            </div>
            <div class="col-1 d-flex align-items-center">
                <i class="fa-solid fa-bars js-menu-toggle"></i>
            </div>
        </div>
    </div>

    <div class="col-12 mt-6">
        <div class="w-100 px-2 py-1 bg-red text-white t-small">
            @if (request()->routeIs('restaurant.detail'))
                レストラン詳細
            @else
                現在地近くのレストラン
            @endif
        </div>
    </div>

</div>
