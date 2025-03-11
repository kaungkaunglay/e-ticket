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
            <div class="">{{translate('home')}}</div>
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

<section class="pt-40">
  <div class="container">
    <div class="row y-gap-20 justify-between items-end">
      <div class="col-auto">
        <div class="row x-gap-20 items-center">
          <div class="col-auto">
            <h1 class="text-30 sm:text-25 fw-600">{{ $restaurant->name }}</h1>
          </div>
<!-- 
          <div class="col-auto">
            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>
          </div> -->
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
              <span class="text-22 text-dark-1 fw-500">¥{{$restaurant->price_range}}</span>
            </div>
          </div>

          <div class="col-auto">
            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
              {{translate('booking')}}
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
            {{translate('see_all')}} {{ count($images) }} {{translate('photos')}}
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
            <h3 class="text-22 fw-500">{{translate('property_highlights')}}</h3>
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
                  <div class="text-15 lh-1 mt-10">{{translate('operating_hours')}} [{{$restaurant->operating_hours}}]</div>
                </div>
              </div>
            </div>
          </div>

          <div id="overview" class="col-12">
            <h3 class="text-22 fw-500 pt-40 border-top-light">{{translate('overview')}}</h3>
            <p class="text-dark-1 text-15 mt-20">
              {{$restaurant->description}}
            </p>

          </div>
          <div class="col-md">

            <div class="row x-gap-10 y-gap-10 pt-20">

              @if($restaurant->wifi_availability)
              <div class="col-auto">
                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('wifi')}}</div>
              </div>
              @endif
              @if($restaurant->parking_availability)

              <div class="col-auto">
                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('parking')}}</div>
              </div>
              @endif
              @if($restaurant->outdoor_seating)

              <div class="col-auto">
                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('outdoor_seat')}}</div>
              </div>
              @endif

              <div class="col-auto">
                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{$restaurant->available}}</div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <h3 class="text-22 fw-500">{{translate('contact_us')}}</h3>
            <div class="row y-gap-20 pt-30">
              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-city text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">{{$restaurant->city}}</div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-nearby text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">{{translate('phone')}} - {{$restaurant->phone_number}}</div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-newsletter text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">{{translate('email')}} - {{$restaurant->email}}</div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="text-center">
                <i class="icon-city text-24 text-blue-1"></i>
                <div class="text-15 lh-1 mt-10">{{translate('address')}} - {{$restaurant->address}}</div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Most Popular Facilities</h3>
                        <div class="row y-gap-10 pt-20">
                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-no-smoke"></i>
                                    <div class="text-15">Non-smoking rooms</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-wifi"></i>
                                    <div class="text-15">Free WiFi</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-parking"></i>
                                    <div class="text-15">Parking</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-kitchen"></i>
                                    <div class="text-15">Kitchen</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-living-room"></i>
                                    <div class="text-15">Living Area</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-shield"></i>
                                    <div class="text-15">Safety &amp; security</div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
      </div>

            <div class="col-xl-4">
                <div class="ml-50 lg:ml-0">
                    <!-- <div class="px-30 py-30 border-light rounded-4 shadow-4">
                        <div class="d-flex items-center justify-between">
                            <div class="">
                                <span class="text-20 fw-500">US$72</span>
                                <span class="text-14 text-light-1 ml-5">nights</span>
                            </div>

                            <div class="d-flex items-center">
                                <div class="text-14 text-right mr-10">
                                    <div class="lh-15 fw-500">Exceptional</div>
                                    <div class="lh-15 text-light-1">3,014 reviews</div>
                                </div>

                                <div class="size-40 flex-center bg-blue-1 rounded-4">
                                    <div class="text-14 fw-600 text-white">4.8</div>
                                </div>
                            </div>
                        </div>

                        <div class="row y-gap-20 pt-30">
                            <div class="col-12">
                                <div class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar js-calendar-el">
                                    <div data-x-dd-click="searchMenu-date">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                                        <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                            <span class="js-first-date">Wed 2 Mar</span>
                                            -
                                            <span class="js-last-date">Fri 11 Apr</span>
                                        </div>
                                    </div>

                                    <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="elCalendar js-calendar-el-calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">
                                    <div data-x-dd-click="searchMenu-guests">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16"><span class="js-count-adult">2</span> adults - <span class="js-count-child">1</span> childeren - <span class="js-count-room">1</span> room</div>
                                    </div>

                                    <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Adults</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">2</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 lh-12 fw-500">Children</div>
                                                    <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Rooms</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white">
                                    Check availability
                                </button>
                            </div>
                        </div>
                    </div> -->

          <div class="px-30 py-30 border-light rounded-4 mt-30">
            <div class="flex-center ratio ratio-15:9 mb-15 js-lazy" data-bg="img/general/map.png')}}">
              <a href="{{ $restaurant -> google_map}}" class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute" target="_blank">
                <i class="icon-location text-22 mr-10"></i>
                {{translate('show_on_map')}}
              </a>
            </div>

            <div class="row y-gap-10">
              <div class="col-12">
                <div class="d-flex items-center">
                  <i class="icon-award text-20 text-blue-1"></i>
                  <div class="text-14 fw-500 ml-10">{{translate('location')}} - {{$restaurant->city}}</div>
                </div>
              </div>
            </div>

            <div class="border-top-light mt-15 mb-15"></div>

            <!-- <div class="text-15 fw-500">Popular landmarks</div>

                        <div class="d-flex justify-between pt-10">
                            <div class="text-14">Royal Pump Room Museum</div>
                            <div class="text-14 text-light-1">0.1 km</div>
                        </div>

                        <div class="d-flex justify-between pt-5">
                            <div class="text-14">Harrogate Turkish Baths</div>
                            <div class="text-14 text-light-1">0.1 km</div>
                        </div>

                        <a href="#" class="d-block text-14 fw-500 underline text-blue-1 mt-10">Show More</a> -->
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