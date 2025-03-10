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

<!-- <section id="rooms" class="pt-30">
      <div class="container">
        <div class="row pb-20">
          <div class="col-auto">
            <h3 class="text-22 fw-500">Available Rooms</h3>
          </div>
        </div>

        <div class="border-light rounded-4 px-30 py-30 sm:px-20 sm:py-20">
          <div class="row y-gap-20">
            <div class="col-12">
              <h3 class="text-18 fw-500 mb-15">Standard Twin Room</h3>
              <div class="roomGrid">
                <div class="roomGrid__header">
                  <div>Room Type</div>
                  <div>Benefits</div>
                  <div>Sleeps</div>
                  <div>Price for 5 nights</div>
                  <div>Select Rooms</div>
                  <div></div>
                </div>

                <div class="roomGrid__grid">
                  <div>
                    <div class="ratio ratio-1:1">
                      <img src="{{asset('assets/img/backgrounds/1.png')}}" alt="image" class="img-ratio rounded-4">
                    </div>

                    <div class="y-gap-5 mt-20">

                      <div class="d-flex items-center">
                        <i class="icon-no-smoke text-20 mr-10"></i>
                        <div class="text-15">Non-smoking rooms</div>
                      </div>

                      <div class="d-flex items-center">
                        <i class="icon-wifi text-20 mr-10"></i>
                        <div class="text-15">Free WiFi</div>
                      </div>

                      <div class="d-flex items-center">
                        <i class="icon-parking text-20 mr-10"></i>
                        <div class="text-15">Parking</div>
                      </div>

                      <div class="d-flex items-center">
                        <i class="icon-kitchen text-20 mr-10"></i>
                        <div class="text-15">Kitchen</div>
                      </div>

                    </div>

                    <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                  </div>

                  <div class="y-gap-30">

                    <div class="roomGrid__content">
                      <div>
                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                        <div class="y-gap-8">

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay at the hotel</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay nothing until March 30, 2022</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Free cancellation before April 1, 2022</div>
                          </div>

                        </div>
                      </div>

                      <div>
                        <div class="d-flex items-center text-light-1">
                          <div class="icon-man text-24"></div>
                          <div class="icon-man text-24"></div>
                        </div>
                      </div>

                      <div>
                        <div class="text-18 lh-15 fw-500">US$72</div>
                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                      </div>

                      <div>

                        <div class="dropdown js-dropdown js-price-1-active">
                          <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-1-toggle" data-el-toggle-active=".js-price-1-active">
                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                          </div>

                          <div class="toggle-element -dropdown  js-click-dropdown js-price-1-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                              <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="roomGrid__content">
                      <div>
                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                        <div class="y-gap-8">

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay at the hotel</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay nothing until March 30, 2022</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Free cancellation before April 1, 2022</div>
                          </div>

                        </div>
                      </div>

                      <div>
                        <div class="d-flex items-center text-light-1">
                          <div class="icon-man text-24"></div>
                          <div class="icon-man text-24"></div>
                        </div>
                      </div>

                      <div>
                        <div class="text-18 lh-15 fw-500">US$72</div>
                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                      </div>

                      <div>

                        <div class="dropdown js-dropdown js-price-2-active">
                          <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-toggle" data-el-toggle-active=".js-price-2-active">
                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                          </div>

                          <div class="toggle-element -dropdown  js-click-dropdown js-price-2-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                              <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="roomGrid__content">
                      <div>
                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                        <div class="y-gap-8">

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay at the hotel</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay nothing until March 30, 2022</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Free cancellation before April 1, 2022</div>
                          </div>

                        </div>
                      </div>

                      <div>
                        <div class="d-flex items-center text-light-1">
                          <div class="icon-man text-24"></div>
                          <div class="icon-man text-24"></div>
                        </div>
                      </div>

                      <div>
                        <div class="text-18 lh-15 fw-500">US$72</div>
                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                      </div>

                      <div>

                        <div class="dropdown js-dropdown js-price-3-active">
                          <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-3-toggle" data-el-toggle-active=".js-price-3-active">
                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                          </div>

                          <div class="toggle-element -dropdown  js-click-dropdown js-price-3-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                              <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>

                  <div>
                    <div class="text-14 lh-1">3 rooms for</div>
                    <div class="text-22 fw-500 lh-17 mt-5">US$72</div>


                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white mt-10">
                      Reserve <div class="icon-arrow-top-right ml-15"></div>
                    </a>


                    <div class="text-15 fw-500 mt-30">You'll be taken to the next step</div>

                    <ul class="list-disc y-gap-4 pt-5">

                      <li class="text-14">Confirmation is immediate</li>

                      <li class="text-14">No registration required</li>

                      <li class="text-14">No booking or credit card fees!</li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="border-light rounded-4 px-30 py-30 sm:px-20 sm:py-20 mt-20">
          <div class="row y-gap-20">
            <div class="col-12">
              <h3 class="text-18 fw-500 mb-15">Deluxe King Room</h3>
              <div class="roomGrid">
                <div class="roomGrid__header">
                  <div>Room Type</div>
                  <div>Benefits</div>
                  <div>Sleeps</div>
                  <div>Price for 5 nights</div>
                  <div>Select Rooms</div>
                  <div></div>
                </div>

                <div class="roomGrid__grid">
                  <div>
                    <div class="ratio ratio-1:1">
                      <img src="{{asset('assets/img/backgrounds/1.png')}}" alt="image" class="img-ratio rounded-4">
                    </div>

                    <div class="y-gap-5 mt-20">

                      <div class="d-flex items-center">
                        <i class="icon-no-smoke text-20 mr-10"></i>
                        <div class="text-15">Non-smoking rooms</div>
                      </div>

                      <div class="d-flex items-center">
                        <i class="icon-wifi text-20 mr-10"></i>
                        <div class="text-15">Free WiFi</div>
                      </div>

                      <div class="d-flex items-center">
                        <i class="icon-parking text-20 mr-10"></i>
                        <div class="text-15">Parking</div>
                      </div>

                      <div class="d-flex items-center">
                        <i class="icon-kitchen text-20 mr-10"></i>
                        <div class="text-15">Kitchen</div>
                      </div>

                    </div>

                    <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                  </div>

                  <div class="y-gap-30">

                    <div class="roomGrid__content">
                      <div>
                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                        <div class="y-gap-8">

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay at the hotel</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay nothing until March 30, 2022</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Free cancellation before April 1, 2022</div>
                          </div>

                        </div>
                      </div>

                      <div>
                        <div class="d-flex items-center text-light-1">
                          <div class="icon-man text-24"></div>
                          <div class="icon-man text-24"></div>
                        </div>
                      </div>

                      <div>
                        <div class="text-18 lh-15 fw-500">US$72</div>
                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                      </div>

                      <div>

                        <div class="dropdown js-dropdown js-price-1-active">
                          <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-1-toggle" data-el-toggle-active=".js-price-1-active">
                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                          </div>

                          <div class="toggle-element -dropdown  js-click-dropdown js-price-1-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                              <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="roomGrid__content">
                      <div>
                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                        <div class="y-gap-8">

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay at the hotel</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay nothing until March 30, 2022</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Free cancellation before April 1, 2022</div>
                          </div>

                        </div>
                      </div>

                      <div>
                        <div class="d-flex items-center text-light-1">
                          <div class="icon-man text-24"></div>
                          <div class="icon-man text-24"></div>
                        </div>
                      </div>

                      <div>
                        <div class="text-18 lh-15 fw-500">US$72</div>
                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                      </div>

                      <div>

                        <div class="dropdown js-dropdown js-price-2-active">
                          <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-toggle" data-el-toggle-active=".js-price-2-active">
                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                          </div>

                          <div class="toggle-element -dropdown  js-click-dropdown js-price-2-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                              <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="roomGrid__content">
                      <div>
                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                        <div class="y-gap-8">

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay at the hotel</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Pay nothing until March 30, 2022</div>
                          </div>

                          <div class="d-flex items-center text-green-2">
                            <i class="icon-check text-12 mr-10"></i>
                            <div class="text-15">Free cancellation before April 1, 2022</div>
                          </div>

                        </div>
                      </div>

                      <div>
                        <div class="d-flex items-center text-light-1">
                          <div class="icon-man text-24"></div>
                          <div class="icon-man text-24"></div>
                        </div>
                      </div>

                      <div>
                        <div class="text-18 lh-15 fw-500">US$72</div>
                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                      </div>

                      <div>

                        <div class="dropdown js-dropdown js-price-3-active">
                          <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-3-toggle" data-el-toggle-active=".js-price-3-active">
                            <span class="js-dropdown-title">1 (US$ 3,120)</span>
                            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                          </div>

                          <div class="toggle-element -dropdown  js-click-dropdown js-price-3-toggle">
                            <div class="text-14 y-gap-15 js-dropdown-list">

                              <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                              <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>

                  <div>
                    <div class="text-14 lh-1">3 rooms for</div>
                    <div class="text-22 fw-500 lh-17 mt-5">US$72</div>


                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white mt-10">
                      Reserve <div class="icon-arrow-top-right ml-15"></div>
                    </a>


                    <div class="text-15 fw-500 mt-30">You'll be taken to the next step</div>

                    <ul class="list-disc y-gap-4 pt-5">

                      <li class="text-14">Confirmation is immediate</li>

                      <li class="text-14">No registration required</li>

                      <li class="text-14">No booking or credit card fees!</li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<div id="reviews"></div>
<!-- <section class="pt-40">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="text-22 fw-500">Guest reviews</h3>
          </div>
        </div>

        <div class="row y-gap-30 items-center pt-20">
          <div class="col-lg-3">
            <div class="flex-center rounded-4 min-h-250 bg-blue-1-05">
              <div class="text-center">
                <div class="text-60 md:text-50 fw-600 text-blue-1">4.8</div>
                <div class="fw-500 lh-1">Exceptional</div>
                <div class="text-14 text-light-1 lh-1 mt-5">3,014 reviews</div>
              </div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="row y-gap-30">

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Location</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Staff</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Cleanliness</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Value for money</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Comfort</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Facilities</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="">
                  <div class="d-flex items-center justify-between">
                    <div class="text-15 fw-500">Free WiFi</div>
                    <div class="text-15 text-light-1">9.4</div>
                  </div>

                  <div class="progressBar mt-10">
                    <div class="progressBar__bg bg-blue-2"></div>
                    <div class="progressBar__bar bg-dark-1" style="width: 90%"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section class="pt-40">
      <div class="container">
        <div class="row y-gap-60">


          <div class="col-lg-6">
            <div class="row x-gap-20 y-gap-20 items-center">
              <div class="col-auto">
                <img src="{{asset('assets/img/avatars/2.png')}}" alt="image">
              </div>
              <div class="col-auto">
                <div class="fw-500 lh-15">Tonko</div>
                <div class="text-14 text-light-1 lh-15">March 2022</div>
              </div>
            </div>

            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


            <div class="row x-gap-30 y-gap-30 pt-20">

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/1.png')}}" alt="image" class="rounded-4">
              </div>

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/2.png')}}" alt="image" class="rounded-4">
              </div>

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/3.png')}}" alt="image" class="rounded-4">
              </div>

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/4.png')}}" alt="image" class="rounded-4">
              </div>

            </div>


            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>


          <div class="col-lg-6">
            <div class="row x-gap-20 y-gap-20 items-center">
              <div class="col-auto">
                <img src="{{asset('assets/img/avatars/2.png')}}" alt="image">
              </div>
              <div class="col-auto">
                <div class="fw-500 lh-15">Tonko</div>
                <div class="text-14 text-light-1 lh-15">March 2022</div>
              </div>
            </div>

            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


            <div class="row x-gap-30 y-gap-30 pt-20">

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/1.png')}}" alt="image" class="rounded-4">
              </div>

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/2.png')}}" alt="image" class="rounded-4">
              </div>

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/3.png')}}" alt="image" class="rounded-4">
              </div>

              <div class="col-auto">
                <img src="{{asset('assets/img/testimonials/1/4.png')}}" alt="image" class="rounded-4">
              </div>

            </div>


            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>


          <div class="col-lg-6">
            <div class="row x-gap-20 y-gap-20 items-center">
              <div class="col-auto">
                <img src="{{asset('assets/img/avatars/2.png')}}" alt="image">
              </div>
              <div class="col-auto">
                <div class="fw-500 lh-15">Tonko</div>
                <div class="text-14 text-light-1 lh-15">March 2022</div>
              </div>
            </div>

            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>


          <div class="col-lg-6">
            <div class="row x-gap-20 y-gap-20 items-center">
              <div class="col-auto">
                <img src="{{asset('assets/img/avatars/2.png')}}" alt="image">
              </div>
              <div class="col-auto">
                <div class="fw-500 lh-15">Tonko</div>
                <div class="text-14 text-light-1 lh-15">March 2022</div>
              </div>
            </div>

            <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
            <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>


            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>


        </div>

        <div class="row pt-30">
          <div class="col-auto">

            <a href="#" class="button -md -outline-blue-1 text-blue-1">
              Show all 116 reviews <div class="icon-arrow-top-right ml-15"></div>
            </a>

          </div>
        </div>
      </div>
    </section> -->

<!-- <section class="pt-40">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-10">
            <div class="row">
              <div class="col-auto">
                <h3 class="text-22 fw-500">Leave a Reply</h3>
                <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
              </div>
            </div>

            <div class="row y-gap-30 pt-30">

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Location</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Staff</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Cleanliness</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Value for money</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Comfort</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Facilities</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

              <div class="col-xl-4">
                <div class="text-15 lh-1 fw-500">Free WiFi</div>
                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                  <div class="icon-star text-10 text-yellow-1"></div>

                </div>
              </div>

            </div>

            <div class="row y-gap-30 pt-20">
              <div class="col-xl-6">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Text</label>
                </div>

              </div>
              <div class="col-xl-6">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Email</label>
                </div>

              </div>
              <div class="col-12">

                <div class="form-input ">
                  <textarea required rows="4"></textarea>
                  <label class="lh-1 text-16 text-light-1">Write Your Comment</label>
                </div>

              </div>
              <div class="col-auto">

                <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                  Post Comment <div class="icon-arrow-top-right ml-15"></div>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!-- 
    <div class="container">
      <div class="border-top-light mt-30"></div>
    </div> -->

<!-- <div id="facilities"></div> -->
<!-- <section class="mt-40">
      <div class="container">
        <div class="row x-gap-40 y-gap-40">
          <div class="col-12">
            <h3 class="text-22 fw-500">Facilities of The Crown Hotel</h3>

            <div class="row x-gap-40 y-gap-40 pt-20">
              <div class="col-xl-4">
                <div class="row y-gap-30">
                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-bathtub text-20 mr-10"></i>
                        Bathroom
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Towels
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Bath or shower
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Private bathroom
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Toilet
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Free toiletries
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Hairdryer
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Bath
                        </li>

                      </ul>
                    </div>

                  </div>

                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-bed text-20 mr-10"></i>
                        Bedroom
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Linen
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Wardrobe or closet
                        </li>

                      </ul>
                    </div>

                  </div>

                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-bell-ring text-20 mr-10"></i>
                        Reception services
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Invoice provided
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Private check-in/check-out
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Luggage storage
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          24-hour front desk
                        </li>

                      </ul>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xl-4">
                <div class="row y-gap-30">
                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-tv text-20 mr-10"></i>
                        Media &amp; Technology
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Flat-screen TV
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Satellite channels
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Radio
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Telephone
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          TV
                        </li>

                      </ul>
                    </div>

                  </div>

                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-juice text-20 mr-10"></i>
                        Food &amp; Drink
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Kid meals
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Special diet menus (on request)
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Breakfast in the room
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Bar
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Restaurant
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Tea/Coffee maker
                        </li>

                      </ul>
                    </div>

                  </div>

                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-washing-machine text-20 mr-10"></i>
                        Cleaning services
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Daily housekeeping
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Dry cleaning
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Laundry
                        </li>

                      </ul>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xl-4">
                <div class="row y-gap-30">
                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-shield text-20 mr-10"></i>
                        Safety &amp; security
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Fire extinguishers
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          CCTV in common areas
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Smoke alarms
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          24-hour security
                        </li>

                      </ul>
                    </div>

                  </div>

                  <div class="col-12">

                    <div class="">
                      <div class="d-flex items-center text-16 fw-500">
                        <i class="icon-city-2 text-20 mr-10"></i>
                        General
                      </div>

                      <ul class="text-15 pt-10">

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Hypoallergenic
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Non-smoking throughout
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Wake-up service
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Heating
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Packed lunches
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Carpeted
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Lift
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Fan
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Family rooms
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Facilities for disabled guests
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Ironing facilities
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Non-smoking rooms
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Iron
                        </li>

                        <li class="d-flex items-center">
                          <i class="icon-check text-10 mr-20"></i>
                          Room service
                        </li>

                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section class="pt-40">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="px-24 py-20 rounded-4 bg-light-2">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <div class="flex-center size-60 rounded-full bg-white">
                    <img src="{{asset('assets/img/icons/health.svg')}}" alt="icon">
                  </div>
                </div>

                <div class="col-auto">
                  <h4 class="text-18 lh-15 fw-500">Extra health & safety measures</h4>
                  <div class="text-15 lh-15">This property has taken extra health and hygiene measures to ensure that your safety is their priority</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section class="pt-40">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="text-22 fw-500">Hotel surroundings</h3>
          </div>
        </div>

        <div class="row x-gap-50 y-gap-30 pt-20">
          <div class="col-lg-4 col-md-6">
            <div class="d-flex items-center">
              <i class="icon-nearby text-20 mr-10"></i>
              <div class="text-16 fw-500">What's nearby</div>
            </div>

            <div class="row y-gap-10 pt-10">

              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">Royal Pump Room Museum</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


              <div class="col-12">
                <div class="border-top-light"></div>
              </div>


              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">Harrogate Turkish Baths</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


              <div class="col-12">
                <div class="border-top-light"></div>
              </div>


              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">Royal Hall Theatre</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


              <div class="col-12">
                <div class="border-top-light"></div>
              </div>


              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">Harrogate Theatre</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


              <div class="col-12">
                <div class="border-top-light"></div>
              </div>


              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">Harrogate Library</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


              <div class="col-12">
                <div class="border-top-light"></div>
              </div>


              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">The Valley Gardens</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


              <div class="col-12">
                <div class="border-top-light"></div>
              </div>


              <div class="col-12">
                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="text-15">Harrogate District Hospital</div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-right">0.1 km</div>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="mb-40 md:mb-30">
              <div class="d-flex items-center">
                <i class="icon-airplane text-20 mr-10"></i>
                <div class="text-16 fw-500">Closest airports</div>
              </div>

              <div class="row y-gap-10 pt-10">

                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Leeds Bradford International Airport</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


                <div class="col-12">
                  <div class="border-top-light"></div>
                </div>


                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Durham Tees Valley Airport</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


                <div class="col-12">
                  <div class="border-top-light"></div>
                </div>


                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Doncaster Sheffield Airport</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


              </div>
            </div>

            <div class="">
              <div class="d-flex items-center">
                <i class="icon-food text-20 mr-10"></i>
                <div class="text-16 fw-500">Restaurants & cafes</div>
              </div>

              <div class="row y-gap-10 pt-10">

                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Cafe/bar Bettys Café Tea Rooms</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


                <div class="col-12">
                  <div class="border-top-light"></div>
                </div>


                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Cafe/bar Bettys Café Tea Rooms</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="">
              <div class="d-flex items-center">
                <i class="icon-ticket text-20 mr-10"></i>
                <div class="text-16 fw-500">Top attractions</div>
              </div>

              <div class="row y-gap-10 pt-10">

                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Ripley Castle</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


                <div class="col-12">
                  <div class="border-top-light"></div>
                </div>


                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Roundhay Park</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


                <div class="col-12">
                  <div class="border-top-light"></div>
                </div>


                <div class="col-12">
                  <div class="row items-center justify-between">
                    <div class="col-auto">
                      <div class="text-15">Bramham Park</div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-right">57.9 km</div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section class="pt-40">
      <div class="container">
        <div class="pt-40 border-top-light">
          <div class="row">
            <div class="col-12">
              <h3 class="text-22 fw-500">Some helpful facts</h3>
            </div>
          </div>

          <div class="row x-gap-50 y-gap-30 pt-20">
            <div class="col-lg-4 col-md-6">
              <div class="">
                <div class="d-flex items-center">
                  <i class="icon-calendar text-20 mr-10"></i>
                  <div class="text-16 fw-500">Check-in/Check-out</div>
                </div>

                <div class="row x-gap-50 y-gap-5 pt-10">

                  <div class="col-12">
                    <div class="text-15">Check-in from: 16:00</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Check-out until: 12:00</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Reception open until: 00:00</div>
                  </div>

                </div>
              </div>

              <div class="mt-30">
                <div class="d-flex items-center">
                  <i class="icon-location-pin text-20 mr-10"></i>
                  <div class="text-16 fw-500">Getting around</div>
                </div>

                <div class="row x-gap-50 y-gap-5 pt-10">

                  <div class="col-12">
                    <div class="text-15">Airport transfer fee: 60 USD</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Distance from city center: 2 km</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Travel time to airport (minutes): 45</div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="">
                <div class="d-flex items-center">
                  <i class="icon-ticket text-20 mr-10"></i>
                  <div class="text-16 fw-500">Extras</div>
                </div>

                <div class="row x-gap-50 y-gap-5 pt-10">

                  <div class="col-12">
                    <div class="text-15">Breakfast charge (unless included in room price): 25 USD</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Daily Internet/Wi-Fi fee: 10 USD</div>
                  </div>

                </div>
              </div>

              <div class="mt-30">
                <div class="d-flex items-center">
                  <i class="icon-parking text-20 mr-10"></i>
                  <div class="text-16 fw-500">Parking</div>
                </div>

                <div class="row x-gap-50 y-gap-5 pt-10">

                  <div class="col-12">
                    <div class="text-15">Daily parking fee: 65 USD</div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="">
                <div class="d-flex items-center">
                  <i class="icon-plans text-20 mr-10"></i>
                  <div class="text-16 fw-500">The property</div>
                </div>

                <div class="row x-gap-50 y-gap-5 pt-10">

                  <div class="col-12">
                    <div class="text-15">Non-smoking rooms/floors: Yes</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Number of bars/lounges: 1</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Number of floors: 26</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Number of restaurants: 1</div>
                  </div>

                  <div class="col-12">
                    <div class="text-15">Number of rooms : 443</div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section id="faq" class="pt-40 layout-pb-md">
      <div class="container">
        <div class="pt-40 border-top-light">
          <div class="row y-gap-20">
            <div class="col-lg-4">
              <h2 class="text-22 fw-500">FAQs about<br> The Crown Hotel</h2>
            </div>

            <div class="col-lg-8">
              <div class="accordion -simple row y-gap-20 js-accordion">

                <div class="col-12">
                  <div class="accordion__item px-20 py-20 border-light rounded-4">
                    <div class="accordion__button d-flex items-center">
                      <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                        <i class="icon-plus"></i>
                        <i class="icon-minus"></i>
                      </div>

                      <div class="button text-dark-1">What do I need to hire a car?</div>
                    </div>

                    <div class="accordion__content">
                      <div class="pt-20 pl-60">
                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item px-20 py-20 border-light rounded-4">
                    <div class="accordion__button d-flex items-center">
                      <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                        <i class="icon-plus"></i>
                        <i class="icon-minus"></i>
                      </div>

                      <div class="button text-dark-1">How old do I have to be to rent a car?</div>
                    </div>

                    <div class="accordion__content">
                      <div class="pt-20 pl-60">
                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item px-20 py-20 border-light rounded-4">
                    <div class="accordion__button d-flex items-center">
                      <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                        <i class="icon-plus"></i>
                        <i class="icon-minus"></i>
                      </div>

                      <div class="button text-dark-1">Can I book a hire car for someone else?</div>
                    </div>

                    <div class="accordion__content">
                      <div class="pt-20 pl-60">
                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item px-20 py-20 border-light rounded-4">
                    <div class="accordion__button d-flex items-center">
                      <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                        <i class="icon-plus"></i>
                        <i class="icon-minus"></i>
                      </div>

                      <div class="button text-dark-1">How do I find the cheapest car hire deal?</div>
                    </div>

                    <div class="accordion__content">
                      <div class="pt-20 pl-60">
                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="accordion__item px-20 py-20 border-light rounded-4">
                    <div class="accordion__button d-flex items-center">
                      <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                        <i class="icon-plus"></i>
                        <i class="icon-minus"></i>
                      </div>

                      <div class="button text-dark-1">What should I look for when I&#39;m choosing a car?</div>
                    </div>

                    <div class="accordion__content">
                      <div class="pt-20 pl-60">
                        <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- <section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Popular properties similar to The Crown Hotel</h2>
                    <p class="sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <a href="hotel-single-1.html" class="hotelsCard -type-1">
                    <div class="hotelsCard__image">
                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">
                                <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image" />
                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>

                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    Breakfast included
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>The Montcalm At Brewery London City</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">Starting from <span class="text-blue-1">US$72</span></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">
                <a href="hotel-single-1.html" class="hotelsCard -type-1">
                    <div class="hotelsCard__image">
                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">
                                <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image" />
                                        </div>

                                        <div class="swiper-slide">
                                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image" />
                                        </div>

                                        <div class="swiper-slide">
                                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image" />
                                        </div>
                                    </div>

                                    <div class="cardImage-slider__pagination js-pagination"></div>

                                    <div class="cardImage-slider__nav -prev">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                            <i class="icon-chevron-left text-10"></i>
                                        </button>
                                    </div>

                                    <div class="cardImage-slider__nav -next">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                            <i class="icon-chevron-right text-10"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>Staycity Aparthotels Deptford Bridge Station</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">Starting from <span class="text-blue-1">US$72</span></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">
                <a href="hotel-single-1.html" class="hotelsCard -type-1">
                    <div class="hotelsCard__image">
                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">
                                <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image" />
                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>

                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                    Best Seller
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>The Westin New York at Times Square</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">Starting from <span class="text-blue-1">US$72</span></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">
                <a href="hotel-single-1.html" class="hotelsCard -type-1">
                    <div class="hotelsCard__image">
                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">
                                <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image" />
                            </div>

                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>

                            <div class="cardImage__leftBadge">
                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                                    Top Rated
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                        </h4>

                        <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>

                        <div class="mt-5">
                            <div class="fw-500">Starting from <span class="text-blue-1">US$72</span></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->
<section class="mt-40">
  @include('includes.subscribe')
</section>

@endsection