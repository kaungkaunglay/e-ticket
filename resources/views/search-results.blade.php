@extends('includes.layout')
@section('style')

@endsection
@section('contents')
<section class="pt-40 pb-40 bg-light-2">
    <form action="{{ route('restaurantall.search') }}" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="text-30 fw-600">
                            @if($query)
                                Search Results for "{{ $query }}"
                            @else
                                {{ translate('restaurant_near') }}
                            @endif
                        </h1>
                    </div>

                    <div class="mainSearch -col-3-big bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
                        <div class="button-grid items-center d-flex flex-wrap">
                            <!-- Search Input Field -->
                            <div class="searchMenu-loc pl-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch" style="flex-grow: 1;">
                                <div data-x-dd-click="searchMenu-loc">
                                    <h4 class="text-15 fw-500 ls-2 lh-16">{{translate('location')}}</h4>
                                    <div class="text-15 text-light-1 ls-2 lh-16">
                                        <input autocomplete="off" type="search" placeholder="Enter City" class="js-search js-dd-focus" name="city" value="{{ $query }}" />
                                    </div>
                                </div>
                            </div>

                            <!-- Search Button -->
                            <div class="button-item ml-auto">
                                <button class="mainSearch__submit button -dark-1 py-15 px-40 rounded-4 bg-blue-1 text-white">
                                    <i class="icon-search text-20 mr-10"></i>
                                    {{translate('search')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-3 col-lg-4 lg:d-none">
        <aside class="sidebar y-gap-40">
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
            <form id="filter-form" method="GET" action="{{ route('restaurant.searchcheckbox.search') }}">
    <div class="sidebar-checkbox">
        @php
            $priceRanges = [
                ['label' => 'budget', 'min' => 100, 'max' => 200],
                ['label' => 'mid_range', 'min' => 200, 'max' => 300],
                ['label' => 'luxury', 'min' => 300, 'max' => 400],
                ['label' => 'family_friendly', 'min' => 400, 'max' => 500],
                ['label' => 'business', 'min' => 500, 'max' => 8000],
            ];
            $selectedFilters = request()->input('filter_price', []);
        @endphp

        @foreach ($priceRanges as $range)
            @php
                $value = $range['min'] . '-' . $range['max'];
                $isChecked = in_array($value, $selectedFilters);
            @endphp

            <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="form-checkbox">
                            <input type="checkbox" name="filter_price[]" value="{{ $value }}" 
                                {{ $isChecked ? 'checked' : '' }}>
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


<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('filter-form');

    form.addEventListener('change', function () {
        form.submit(); 
    });
});
</script>


          </div>

        </aside>
      </div>


      
      <div class="col-xl-9 col-lg-8">
        <!-- <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <div class="text-18"><span class="fw-500">3,269 properties</span> in Europe</div>
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
        </div> -->

        <!-- <div class="mt-30"></div> -->

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
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 favourite-btn" data-id="{{ $restaurant->id }}">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                  </div>

                </div>

                <div class="col-md">
                  <h3 class="text-18 lh-16 fw-500">
                    {{$restaurant->name}}<br class="lg:d-none"> {{$restaurant->category->name}}, {{$restaurant->city}}
                  </h3>

                  <div class="row x-gap-10 y-gap-10 items-center pt-10">
                    <div class="col-auto">
                      <p class="text-14">{{$restaurant->address}}</p>
                    </div>

                    <div class="col-auto">
                      <a href="{{$restaurant->google_map}}" class="d-block text-14 text-blue-1 underline">{{translate('show_on_map')}}</a>
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

                  @if(!is_null($restaurant->wifi_availability) && $restaurant->wifi_availability)
                      <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{ translate('wifi') }}</div>
                      </div>
                  @endif

                  @if(!is_null($restaurant->parking_availability) && $restaurant->parking_availability)
                      <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{ translate('parking') }}</div>
                      </div>
                  @endif

                  @if(!is_null($restaurant->outdoor_seating) && $restaurant->outdoor_seating)
                      <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{ translate('outdoor_seat') }}</div>
                      </div>
                  @endif
 
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


        @if ($restaurants->isEmpty())
    <p class="text-center text-muted">データがありません。</p>
@else
    <div class="border-top-light mt-30 pt-30">
        @if ($restaurants->total() > $restaurants->perPage()) 
            <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
                
                <div class="col-auto md:order-1">
                    @if ($restaurants->onFirstPage())
                        <button class="button -blue-1 size-40 rounded-full border-light" disabled>
                            <i class="icon-chevron-left text-12"></i>
                        </button>
                    @else
                        <a href="{{ $restaurants->previousPageUrl() }}">
                            <button class="button -blue-1 size-40 rounded-full border-light">
                                <i class="icon-chevron-left text-12"></i>
                            </button>
                        </a>
                    @endif
                </div>

                <div class="col-md-auto md:order-3">
                    <div class="row x-gap-20 y-gap-20 items-center md:d-none">
                        @foreach ($restaurants->links()->elements[0] ?? [] as $page => $url)
                            <div class="col-auto">
                                <a href="{{ $url }}">
                                    <div class="size-40 flex-center rounded-full {{ $restaurants->currentPage() == $page ? 'bg-dark-1 text-white' : '' }}">
                                        {{ $page }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-auto md:order-2">
                    @if ($restaurants->hasMorePages())
                        <a href="{{ $restaurants->nextPageUrl() }}">
                            <button class="button -blue-1 size-40 rounded-full border-light">
                                <i class="icon-chevron-right text-12"></i>
                            </button>
                        </a>
                    @else
                        <button class="button -blue-1 size-40 rounded-full border-light" disabled>
                            <i class="icon-chevron-right text-12"></i>
                        </button>
                    @endif
                </div>

            </div>
        @endif
    </div>
@endif


      </div>
    </div>
  </div>
</section>


@include('includes.subscribe')

@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script>
  document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#date-picker", {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      time_24hr: true,
      onClose: function(selectedDates) {
        if (selectedDates.length === 1) {
          document.getElementById("check_in").value = flatpickr.formatDate(selectedDates[0], "Y-m-d H:i");
        }
      }
    });
  });

  $(document).ready(function() {
    $('.favourite-btn').click(function(e) {
      e.preventDefault();

      let restaurantId = $(this).data('id');
      let token = '{{ csrf_token() }}';

      $.ajax({
        url: "{{ route('booking.favourite') }}",
        type: "GET",
        data: {
          _token: token,
          restaurants_id: restaurantId
        },
        success: function(response) {
          toastr.success(response.message);
        },
        error: function(xhr) {
          if (xhr.status === 422) {
            toastr.error("Invalid request. Please try again.");
          } else {
            toastr.error("'最初にログインする必要があります。");
          }
        }
      });
    });
  });
</script>