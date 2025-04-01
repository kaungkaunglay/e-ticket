@extends('layouts.app')

@section('contents')

    <div class="row p-3 mt-1">

    @foreach($restaurants as $restaurant)
    <form action="{{ locale_route('restaurant.search') }}" method="GET">
        <div class="col-12 my-2" style="height: 124px;">
            <div class="d-flex gap-3 justify-content-between">
               
                <div class="" style="width: 40%; height: 124px;">
                    <img src="{{ asset('' . $restaurant->logo) }}" alt="{{ $restaurant->name }}  class="img-fluid" style="width: 100%; height: 100%;" alt="">
                </div>
               
                <div class="" style="width: 60%;">
                    <div class="d-flex justify-content-between align-items-start">
                        <small class="fw-bold t-small"> {{ $restaurant->name }}</small>
                        <div class="d-flex align-items-start gap-2">
                            <small class="fw-bold t-small">
                                <i class="fa-solid fa-utensils"></i>
                            </small>
                            <small class="fw-bold  t-small">～</small>
                            <small class="text-primary fw-bold  t-small">￥ {{ number_format($restaurant->price_range) }}</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="w-50 t-8" >
                        {{ $restaurant->address }}
                            <a href="{{ $restaurant->google_map }}" class="t-10 d-block mt-1">{{ translate('show_on_map') }}</a>
                        </div>
                        <div class="w-50">
                            <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="w-100 btn btn-danger rounded-0 t-5" data-id="{{ $restaurant->id }}">
                                空き状況を見る 
                               </a>
                        </div>
                    </div>
                    <div class="m-0">
                        <p class="t-8 m-0">レストランについて</p>
                        <p class="t-8 m-0" >{{ mb_strimwidth($restaurant->description, 0, 80, '...') }}</p>
                    </div>
                    <div class="m-0 d-flex align-items-start flex-wrap mt-1">
                    @if(!is_null($restaurant->smoking) && $restaurant->smoking)
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                        {{ translate('smoking') }}
                        </span>
                        @endif
                        @if(!is_null($restaurant->wifi_availability) && $restaurant->wifi_availability)
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                        {{ translate('wifi') }}
                        </span>
                        @endif
                        @if(!is_null($restaurant->parking_availability) && $restaurant->parking_availability)
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                        {{ translate('parking') }}
                        </span>
                        @endif
                        @if(!is_null($restaurant->outdoor_seating) && $restaurant->outdoor_seating)
                        <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1">
                        {{ translate('outdoor_seat') }}
                        </span>
                        @endif
                    </div>
                  
                </div>
             
            </div>
        </div>
       
        @endforeach

        @if ($restaurants->isEmpty())
            <p class="text-center text-muted">データがありません。</p>
        @else

        @if ($restaurants->lastPage() > 1)
            <div class="border-top-light mt-30 pt-30 d-flex justify-content-end gap-1">
                <div class="">
                    <a href="{{ $restaurants->previousPageUrl() }}" class="btn btn-outline-danger btn-sm" @if($restaurants->onFirstPage()) disabled @endif>
                        <i class="icon-chevron-left t-10"></i>
                    </a>
                </div>
                <div class="">
                    @for ($page = 1; $page <= $restaurants->lastPage(); $page++)
                        <a href="{{ $restaurants->url($page) }}" class="btn {{ $restaurants->currentPage() == $page ? 'btn-danger' : 'btn-outline-danger'}} btn-sm">
                            {{ $page }}
                        </a>    
                    @endfor
                </div>
                <div class="">
                    <a href="{{ $restaurants->nextPageUrl() }}" class="btn btn-outline-danger btn-sm" @if($restaurants->hasMorePages()) disabled @endif>
                        <i class="icon-chevron-right t-10"></i>
                    </a>
                </div>

                {{-- <div class="row align-items-center">
                    <div class="col-auto">
                        @if ($restaurants->onFirstPage())
                            <button class="button size-40 rounded-full" disabled 
                                style="background-color: white !important; border: 2px solid #F10146 !important; color: #F10146 !important;">
                                <i class="icon-chevron-left text-12"></i>
                            </button>
                        @else
                            <a href="{{ $restaurants->previousPageUrl() }}" class="button size-40 rounded-full"
                                style="background-color: white !important; border: 2px solid #F10146 !important; color: #F10146 !important; text-decoration: none !important;">
                                <i class="icon-chevron-left text-12"></i>
                            </a>
                        @endif 
                        <a href="{{ $restaurants->previousPageUrl() }}" class="btn btn-outline-danger btn-sm" @if($restaurants->onFirstPage()) disabled @endif>
                            <i class="icon-chevron-left text-12"></i>
                        </a>
                    </div>

                    <div class="col-auto d-flex">
                        @for ($page = 1; $page <= $restaurants->lastPage(); $page++)
                            <a href="{{ $restaurants->url($page) }}" class="mx-2" 
                                style="text-decoration: none !important;">
                                <div class="size-40 flex-center rounded-full px-1"
                                    style="background-color: {{ $restaurants->currentPage() == $page ? '#F10146' : 'white' }} !important;
                                        color: {{ $restaurants->currentPage() == $page ? 'white' : '#F10146' }} !important;
                                        border: 2px solid #F10146 !important;">
                                    {{ $page }}
                                </div>
                            </a>
                            <a href="{{ $restaurants->url($page) }}" class="btn btn-outline-danger btn-sm">
                                {{ $page }}
                            </a>
                        @endfor
                    </div>

                    <div class="col-auto">
                        <a href="{{ $restaurants->nextPageUrl() }}" class="btn btn-outline-danger btn-sm" @if($restaurants->hasMorePages()) disabled @endif>
                            <i class="icon-chevron-right text-12"></i>
                        </a>
                        @if ($restaurants->hasMorePages())
                            <a href="{{ $restaurants->nextPageUrl() }}" class="button size-40 rounded-full"
                                style="background-color: white !important; border: 2px solid #F10146 !important; color: #F10146 !important; text-decoration: none !important;">
                                <i class="icon-chevron-right text-12"></i>
                            </a>
                        @else
                            <button class="button size-40 rounded-full" disabled 
                                style="background-color: white !important; border: 2px solid #F10146 !important; color: #F10146 !important;">
                                <i class="icon-chevron-right text-12"></i>
                            </button>
                        @endif
                    </div>
                </div> --}}
            </div>
        @endif
    @endif


        

    </div>

@endsection
