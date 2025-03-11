@extends('includes.layout')
@section('style')

@endsection
@section('contents')
<section class="pt-40 pb-40 bg-light-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h1 class="text-30 fw-600">

            @if($checkIn)
            Search Results for "{{ $query }}" on {{ \Carbon\Carbon::parse($checkIn)->format('F j, Y g:i A') }}
            @else
            {{ translate('restaurant_near') }}
            @endif
          </h1>
        </div>

        <div class="mainSearch -col-3-big bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
          <div class="button-grid items-center">

            <div class="searchMenu-loc pl-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

              <div data-x-dd-click="searchMenu-loc">
                <h4 class="text-15 fw-500 ls-2 lh-16">{{translate('location')}}</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input autocomplete="off" type="search" placeholder="London" class="js-search js-dd-focus" value="{{ $query }}" />
                </div>
              </div>


              <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4" style="display: none;">
                  <div class="y-gap-5 js-results " style="display: none;">

                    <div style="display: none;">
                      <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                        <div class="d-flex">
                          <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                          <div class="ml-10">
                            <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                            <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div style="display: none;">
                      <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                        <div class="d-flex">
                          <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                          <div class="ml-10">
                            <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                            <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div style="display: none;">
                      <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                        <div class="d-flex">
                          <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                          <div class="ml-10">
                            <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                            <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div style="display: none;">
                      <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                        <div class="d-flex">
                          <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                          <div class="ml-10">
                            <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                            <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div style="display: none;">
                      <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                        <div class="d-flex">
                          <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                          <div class="ml-10">
                            <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                            <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                          </div>
                        </div>
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>


            <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el">

              <div data-x-dd-click="searchMenu-date">


                <div class="capitalize text-15 text-light-1 ls-2 lh-16">

                </div>
              </div>


              <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                <div class="bg-white px-30 py-30 rounded-4">
                  <div class="elCalendar js-calendar-el-calendar"></div>
                </div>
              </div>
            </div>


            <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

              <div data-x-dd-click="searchMenu-guests">
                <!-- <h4 class="text-15 fw-500 ls-2 lh-16">{{translate('guest')}}</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                  <span class="js-count-adult">2</span> adults
                  -
                  <span class="js-count-child">1</span> childeren
                  -
                  <span class="js-count-room">1</span> room
                </div> -->
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


            <div class="button-item">
              <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                <i class="icon-search text-20 mr-10"></i>
                {{translate('search')}}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-3 col-lg-4 lg:d-none">
        <aside class="sidebar y-gap-40">
          <!-- <div class="sidebar__item -no-border">
            <div class="flex-center ratio ratio-15:9 js-lazy" data-bg="{{asset('assets/img/general/map.png')}}">
              <button class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute" data-x-click="mapFilter">
                <i class="icon-destination text-22 mr-10"></i>
                {{translate('show_on_map')}}
              </button>
            </div>
          </div>

          <div class="sidebar__item -no-border">
            <h5 class="text-18 fw-500 mb-10">{{translate('search')}}</h5>
            <div class="single-field relative d-flex items-center py-10">
              <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="e.g. Best Western">
              <button class="absolute d-flex items-center h-full">
                <i class="icon-search text-20 px-15 text-dark-1"></i>
              </button>
            </div>
          </div> -->

          <div class="sidebar__item pb-30">
            <h5 class="text-18 fw-500 mb-10">{{translate('price')}}</h5>
            <div class="row x-gap-10 y-gap-30">
              <div class="col-12">
                <div class="js-price-rangeSlider">
                  <div class="text-14 fw-500"></div>

                  <div class="d-flex justify-between mb-20">
                    <div class="text-15 text-dark-1">
                        <span class="js-lower" id="lower-value">¥{{ number_format( $minPrice ?? 0 ) }}</span>
                        -
                        <span class="js-upper" id="upper-value">¥{{ number_format( $maxPrice ?? 10000) }}</span>
                    </div>
                </div>

                <div class="px-5">
                    <div class="js-slider" id="price-range-slider"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<form method="GET" action="{{ route('restaurant.price.search') }}" id="search-form">
    <input type="hidden" name="query" value="{{ $query ?? '' }}">
    <input type="hidden" name="check_in" value="{{ $checkIn ?? '' }}">
    <input type="hidden" name="min_price" id="min-price" value="{{ $minPrice ?? 0 }}">
    <input type="hidden" name="max_price" id="max-price" value="{{ $maxPrice ?? 10000 }}">
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const priceSlider = document.getElementById('price-range-slider');
        const minPriceInput = document.getElementById('min-price');
        const maxPriceInput = document.getElementById('max-price');
        const lowerValue = document.getElementById('lower-value');
        const upperValue = document.getElementById('upper-value');
        const searchForm = document.getElementById('search-form');

        noUiSlider.create(priceSlider, {
            start: [{{ $minPrice ?? 0 }}, {{ $maxPrice ?? 10000 }}], 
            connect: true,
            range: {
                'min': 0,
                'max': 10000 
            },
            step: 1
        });

        
        priceSlider.noUiSlider.on('change', function (values) {
            lowerValue.innerHTML = values[0];
            upperValue.innerHTML = values[1];
            minPriceInput.value = values[0];
            maxPriceInput.value = values[1];

            searchForm.submit(); 
        });
    });
</script>
          <div class="sidebar__item">
            <h5 class="text-18 fw-500 mb-10">{{translate('style')}}</h5>
            <form id="filter-form">
    <div class="sidebar-checkbox">
        @php
            $priceRanges = [
                ['label' => 'budget', 'min' => 100, 'max' => 200],
                ['label' => 'mid_range', 'min' => 200, 'max' => 300],
                ['label' => 'luxury', 'min' => 300, 'max' => 400],
                ['label' => 'family_friendly', 'min' => 400, 'max' => 500],
                ['label' => 'business', 'min' => 500, 'max' => 600],
            ];
        @endphp

        @foreach ($priceRanges as $range)
            <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="form-checkbox">
                            <input type="checkbox" name="filter_price[]" value="{{ $range['min'] }}-{{ $range['max'] }}">
                            <div class="form-checkbox__mark">
                                <div class="form-checkbox__icon icon-check"></div>
                            </div>
                        </div>
                        <div class="text-15 ml-10">{{ translate($range['label']) }}</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="text-15 text-light-1">{{ $range['min'] }} - {{ $range['max'] }}</div>
                </div>
            </div>
        @endforeach
    </div>
</form>



<div id="loader" style="display: none; text-align: center; margin-top: 10px;">
    <span>Loading...</span>
</div>


<div id="search-results"></div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('input[name="filter_price[]"]');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            let selectedFilters = [];
            checkboxes.forEach(box => {
                if (box.checked) {
                    selectedFilters.push(box.value);
                }
            });

            
            fetchResults(selectedFilters);
        });
    });

    function fetchResults(filters) {
    
        let url = new URL("{{ locale_route('restaurant.searchcheckbox.search') }}", window.location.origin);
        url.searchParams.set('filter_price', filters.join(','));
        url.searchParams.set('city', '{{ request()->input("city") }}'); 
        url.searchParams.set('min_price', '{{ request()->input("min_price") }}');
        url.searchParams.set('max_price', '{{ request()->input("max_price") }}');
        url.searchParams.set('check_in', '{{ request()->input("check_in") }}');  

    
        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.getElementById("search-results").innerHTML = html;
            });
    }
});
</script>


          </div>

        </aside>
      </div>

      <div class="col-xl-9 col-lg-8">
        <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <!-- <div class="text-18"><span class="fw-500">3,269 properties</span> in Europe</div> -->
          </div>

          <div class="col-auto">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-auto">
                <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                  <i class="icon-up-down text-14 mr-10"></i>
                  {{translate('top_picks_for_your_search')}}
                </button>
              </div>

              <div class="col-auto d-none lg:d-block">
                <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                  <i class="icon-up-down text-14 mr-10"></i>
                  Filter
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-30"></div>

        <div class="row y-gap-30">

          @foreach($restaurants as $restaurant)

          <div class="col-12">

            <div class="border-top-light pt-30">
              <div class="row x-gap-20 y-gap-20">
                <div class="col-md-auto">

                  <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                    <div class="cardImage__content">
                      <img class="rounded-4 col-12" src="{{ asset('' . $restaurant->logo) }}" alt="{{ $restaurant->name }} logo">
                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>

                  </div>

                </div>

                <div class="col-md">
                  <h3 class="text-18 lh-16 fw-500">
                    {{$restaurant->name}}<br class="lg:d-none"> {{$restaurant->category_id}}, {{$restaurant->city}}
                  </h3>

                  <div class="row x-gap-10 y-gap-10 items-center pt-10">
                    <div class="col-auto">
                      <p class="text-14">{{$restaurant->address}}</p>
                    </div>

                    <div class="col-auto">
                      <a href="www.google.com" class="d-block text-14 text-blue-1 underline">{{translate('show_on_map')}}</a>
                    </div>
                  </div>

                  <div class="text-14 lh-15 mt-20">
                    <div class="fw-500">{{translate('about_restaurant')}}</div>
                    <div class="text-light-1">{{ mb_strimwidth($restaurant->description, 0, 80, '...') }}</div>
                  </div>

                  <div class="text-14 text-green-2 lh-15 mt-10">
                    <div class="fw-500">{{translate('free_cancellation')}}</div>
                    <div class="">{{translate('cancel_later')}}</div>
                  </div>

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
                <div class="col-md-auto text-right md:text-left">
                  <!-- <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                      <div class="col-auto">
                        <div class="text-14 lh-14 fw-500">Exceptional</div>
                        <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                      <div class="col-auto">
                        <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                      </div>
                    </div> -->

                  <div class="">
                    <div class="text-14 text-light-1 mt-50 md:mt-20">{{translate('restaurant_menu_start')}}</div>
                    <div class="text-22 lh-12 fw-600 mt-5">¥{{ number_format($restaurant->price_range) }}</div>
                    <div class="text-14 text-light-1 mt-5">{{translate('taxes_not_included')}}</div>


                    <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                      {{translate('see_availability')}}
                      <div class="icon-arrow-top-right ml-15"></div>
                    </a>

                  </div>
                </div>
              </div>
            </div>

          </div>

          @endforeach
        </div>


        <div class="border-top-light mt-30 pt-30">
          <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
            <div class="col-auto md:order-1">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-left text-12"></i>
              </button>
            </div>

            <div class="col-md-auto md:order-3">
              <div class="row x-gap-20 y-gap-20 items-center md:d-none">

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">1</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">3</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">5</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">...</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">20</div>

                </div>

              </div>

              <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">1</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">3</div>

                </div>

              </div>

              <!-- <div class="text-center mt-30 md:mt-10">
                <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
              </div> -->
            </div>

            <div class="col-auto md:order-2">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-right text-12"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('includes.subscribe')

@endsection