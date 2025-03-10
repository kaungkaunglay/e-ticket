@extends('includes.layout') 
@section('style') 
@endsection 
@section('contents')

<section class="py-10 d-flex items-center bg-light-2">
    <div class="container">
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                    <div class="col-auto">
                        <div class="">Home</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="">{{ $restaurant->name }}</div>
                    </div>
                    <div class="col-auto">
                        <div class="">></div>
                    </div>
                    <div class="col-auto">
                        <div class="text-dark-1">{{ $restaurant->address }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="singleMenu js-singleMenu">
    <div class="singleMenu__content">
        <div class="container">
            <div class="row y-gap-20 justify-between items-center">
                <div class="col-auto">
                    <div class="singleMenu__links row x-gap-30 y-gap-10">
                        <div class="col-auto">
                            <a href="#overview">Overview</a>
                        </div>
                        <div class="col-auto">
                            <a href="#rooms">Rooms</a>
                        </div>
                        <div class="col-auto">
                            <a href="#reviews">Reviews</a>
                        </div>
                        <div class="col-auto">
                            <a href="#facilities">Facilities</a>
                        </div>
                        <div class="col-auto">
                            <a href="#faq">Faq</a>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row x-gap-15 y-gap-15 items-center">
                        <div class="col-auto">
                            <div class="text-14">
                                From
                                <span class="text-22 text-dark-1 fw-500">US$72</span>
                            </div>
                        </div>

                        <div class="col-auto">
                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Book
                                <div class="icon-arrow-top-right ml-15"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-40">
    <div class="container">
        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="row x-gap-20 items-center">
                    <div class="col-auto">
                        <h1 class="text-30 sm:text-25 fw-600">{{ $restaurant->name }}</h1>
                    </div>

                    <div class="col-auto">
                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>
                    </div>
                </div>

                <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center text-15 text-light-1">
                            <i class="icon-location-2 text-16 mr-5"></i>
                            {{ $restaurant->address }}
                        </div>
                    </div>

                    <!-- <div class="col-auto">
                <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
              </div> -->
                </div>
            </div>

            <div class="col-auto">
                <div class="row x-gap-15 y-gap-15 items-center">
                    <div class="col-auto">
                        <div class="text-14">
                            From
                            <span class="text-22 text-dark-1 fw-500">${{$restaurant->price_range}}</span>
                        </div>
                    </div>

                    <div class="col-auto">
                    <a href="{{ route('booking.detail', ['id' => $restaurant->id]) }}" 
                      class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                        Booking
                        <div class="icon-arrow-top-right ml-15"></div>
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="galleryGrid -type-1 pt-30">
            <div class="galleryGrid__item relative d-flex">
                @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[0] ?? null; @endphp @if($firstImage)
                <img src="{{ asset($firstImage) }}" alt="Restaurant Image" class="rounded-4" />
                @endif @endif

                <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                    <button class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1">
                        <i class="icon-heart text-16"></i>
                    </button>
                </div>
            </div>

            <div class="galleryGrid__item">
                @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[1] ?? null; @endphp @if($firstImage)
                <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
                @endif @endif
            </div>

            <div class="galleryGrid__item relative d-flex">
                @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[2] ?? null; @endphp @if($firstImage)
                <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
                @endif @endif
                <div class="galleryGrid__item">
                    @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[3] ?? null; @endphp @if($firstImage)
                    <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
                    @endif @endif
                </div>
            </div>

            <div class="galleryGrid__item">
                @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[4] ?? null; @endphp @if($firstImage)
                <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
                @endif @endif
            </div>

            <div class="galleryGrid__item relative d-flex">
                @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[4] ?? null; @endphp @if($firstImage)
                <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
                @endif @endif @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[0] ?? null; @endphp
                @if($firstImage)
                <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
                    <a href="{{ asset($firstImage) }}" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">
                        See All {{ count($images) }} Photos
                    </a>

                    @foreach($images as $image)
                    <a href="{{ asset($image) }}" class="js-gallery" data-gallery="gallery2"></a>
                    @endforeach
                </div>
                @endif @endif
            </div>
        </div>
    </div>
</section>

<section class="pt-30">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-xl-8">
                <div class="row y-gap-40">
                    <div class="col-12">
                        <h3 class="text-22 fw-500">Property highlights</h3>
                        <div class="row y-gap-20 pt-30">
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <i class="icon-city text-24 text-blue-1"></i>
                                    <div class="text-15 lh-1 mt-10">{{$restaurant->city}}</div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <i class="icon-bell-ring text-24 text-blue-1"></i>
                                    <div class="text-15 lh-1 mt-10">Front desk [{{$restaurant->operating_hours}}]</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="overview" class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Overview</h3>
                        <p class="text-dark-1 text-15 mt-20">
                           {{$restaurant->description}}
                        </p>
                       
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="ml-50 lg:ml-0">
                 

                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <div class="flex-center ratio ratio-15:9 mb-15 js-lazy" data-bg="img/general/map.png')}}">
                            <button data-x-click="mapFilter" class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute">
                                <i class="icon-location text-22 mr-10"></i>
                                Show on map
                            </button>
                        </div>

                        <div class="row y-gap-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <i class="icon-award text-20 text-blue-1"></i>
                                    <div class="text-14 fw-500 ml-10">Exceptional location - {{$restaurant->city}}</div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top-light mt-15 mb-15"></div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="reviews"></div>
<section class="mt-40">
@include('includes.subscribe')
</section>

@endsection
