@extends('includes.layout')
@section('style')
@endsection
@section('contents')
<style>
   .searchMenu-loc, .searchMenu-guests {
      text-align: center; 
      display: flex;
      flex-direction: column;
      align-items: center;
   }

   .searchMenu-loc h4, .searchMenu-guests h4 {
      text-align: center; 
      width: 100%;
   }

   .searchMenu-loc input, .searchMenu-guests select {
      text-align: center; 
   }

   .searchMenu-loc select, .searchMenu-guests select {
      text-align-last: center;
   }
</style>

<section data-anim-wrap class="masthead -type-4">
   <div data-anim-child="slide-up" class="masthead-slider overflow-x-hidden js-masthead-slider-4">
   <div class="masthead__image">
      <img src="{{asset('assets/img/masthead/4/bg.jpg')}}" alt="image">
    </div>
    <div class="container">
      <div class="row justify-center">
        <div class="col-xl-9">
          <div class="masthead__content">
            <div class="text-center">
              <h1 data-anim-child="slide-up delay-2" class="text-30 lg:text-40 md:text-30 text-white">{{translate('reserve_table')}}</h1>

              <!-- <div data-anim-child="slide-up delay-4" class="d-inline-block">
                <a href="#" class="button -md -dark-1 bg-red h-50 text-white mt-30">{{translate('discover_more')}}</a>
              </div> -->
            </div>
            <form action="{{ locale_route('restaurant.search') }}" method="GET">
              <div class="mainSearch -col-5 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
                <div class="button-grid items-center d-flex flex-wrap gap-10">
                  <!-- Location Input 1 -->
                  <div class="searchMenu-loc flex-grow-1">
                    <div data-x-dd-click="searchMenu-loc">
                      <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('location') }}</h4>
                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input type="search" placeholder="location" class="js-search js-dd-focus w-100" name="city" />
                      </div>
                    </div>
                  </div>

                 <div class="searchMenu-loc flex-grow-1">
                    <div data-x-dd-click="searchMenu-loc">
                      <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('checkin_date') }}</h4>
                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input autocomplete="off" type="text" placeholder="Check-in"
                          class="js-search js-dd-focus w-100" id="check_in" name="check_in" />
                      </div>
                    </div>
                  </div>
                  
                 <div class="searchMenu-loc flex-grow-1">
                    <div data-x-dd-click="searchMenu-loc">
                      <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('price_with_dropdown') }}</h4>
                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input autocomplete="off" type="search" placeholder="price range" class="js-search js-dd-focus w-100" name="price_range" />
                      </div>
                    </div>
                  </div>

                 
                  <div class="searchMenu-loc flex-grow-1">
                    <div data-x-dd-click="searchMenu-loc">
                      <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('Category') }}</h4>
                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input autocomplete="off" type="search" placeholder="category" class="js-search js-dd-focus w-100" name="category" />
                      </div>
                    </div>
                  </div>

                  <!-- Guest Input -->
                  <div class="searchMenu-guests flex-grow-1">
                    <div data-x-dd-click="searchMenu-guests">
                      <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('smoking') }}</h4>
                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input autocomplete="off" type="number" placeholder="smoking" class="js-search js-dd-focus w-100" name="smoking" />
                      </div>
                    </div>
                  </div>

                  <!-- Search Button -->
                  <div class="button-item flex-grow-1">
                    <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                      <i class="icon-search text-20 mr-10"></i>
                      {{ translate('search') }}
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
</section>

      <form action="{{ locale_route('restaurant.search') }}" method="GET">
   <div class="mainSearch -col-5 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
      <div class="button-grid" style="display: flex; align-items: flex-end; gap: 10px; flex-wrap: nowrap;">
         <!-- Location Input -->
         <div class="searchMenu-loc flex-grow-1">
            <div data-x-dd-click="searchMenu-loc">
               <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('location') }}</h4>
               <div class="text-15 text-light-1 ls-2 lh-16">
                  <input type="search" placeholder="Location" class="js-search js-dd-focus w-100" name="city" />
               </div>
            </div>
         </div>

         <!-- Check-in Date Input -->
         <div class="searchMenu-loc flex-grow-1">
            <div data-x-dd-click="searchMenu-loc">
               <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('checkin_date') }}</h4>
               <div class="text-15 text-light-1 ls-2 lh-16">
                  <input autocomplete="off" type="text" placeholder="Check-in" class="js-search js-dd-focus w-100" id="check_in" name="check_in" />
               </div>
            </div>
         </div>

         <!-- Price From Dropdown -->
         <div class="searchMenu-loc flex-grow-1">
            <div data-x-dd-click="searchMenu-loc">
               <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('price_with_dropdown') }}</h4>
               <div class="text-15 text-light-1 ls-2 lh-16">
                  <select name="price_from" class="js-search js-dd-focus w-100">
                     <option value="">{{ translate('Select Price Range') }}</option>
                     @foreach($priceRange as $price)
                     <option value="{{ $price }}">{{ number_format($price) }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
         </div>

         <!-- Price To Dropdown -->
         <div class="searchMenu-loc flex-grow-1">
            <div data-x-dd-click="searchMenu-loc">
               <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('price_with_to') }}</h4>
               <div class="text-15 text-light-1 ls-2 lh-16">
                  <select name="price_to" class="js-search js-dd-focus w-100">
                     <option value="">{{ translate('Select Price Range') }}</option>
                     @foreach($priceRange as $price)
                     <option value="{{ $price }}">{{ number_format($price) }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
         </div>

         <!-- Category Dropdown -->
         <div class="searchMenu-loc flex-grow-1">
            <div data-x-dd-click="searchMenu-loc">
               <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('Category') }}</h4>
               <div class="text-15 text-light-1 ls-2 lh-16">
                  <select class="js-search js-dd-focus w-100" name="category">
                     <option value="">{{ translate('Select Category') }}</option>
                     @foreach ($category as $cat)
                     <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
         </div>

         <!-- Smoking Preference Dropdown -->
         <div class="searchMenu-guests flex-grow-1">
            <div data-x-dd-click="searchMenu-guests">
               <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('smoking') }}</h4>
               <div class="text-15 text-light-1 ls-2 lh-16">
                  <select class="js-search js-dd-focus w-100" name="smoking">
                     <option value="">{{ translate('Select Smoking Preference') }}</option>
                     <option value="1">{{ translate('Allowed') }}</option>
                     <option value="0">{{ translate('Not Allowed') }}</option>
                  </select>
               </div>
            </div>
         </div>

         <!-- Search Button -->
         <div class="button-item flex-grow-1">
            <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
               <i class="icon-search text-20 mr-10"></i>
               {{ translate('search') }}
            </button>
         </div>
      </div>
   </div>
</form>

   </div>
</section>
<section class="layout-pt-lg home">
   <div data-anim-wrap class="container">
   <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-center text-center">
      <div class="col-auto">
         <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">{{translate('discount_restaurants')}}</h2>
         </div>
      </div>
   </div>
   <div data-anim-child="slide-up delay-2" class="relative pt-40 js-section-slider hidden" data-gap="30" data-slider-cols="xl-6 lg-4 md-3 sm-2 base-1">
      <div class="swiper-wrapper">
         @foreach($discountedRestaurants as $restaurant)
         <div class="swiper-slide">
            <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="citiesCard -type-2 ">
               <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{ asset($restaurant->logo) }}" src="{{ asset($restaurant->logo) }}" alt="image">
               </div>
               <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">{{ $restaurant->name }}</h4>
                  <div class="text-14 text-light-1">{{ $restaurant->created_at->format('d - M - Y') }}</div>
               </div>
            </a>
         </div>
         @endforeach
         <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
         <i class="icon icon-chevron-left text-12"></i>
         </button>
         <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
         <i class="icon icon-chevron-right text-12"></i>
         </button>
      </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-lg">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">{{ translate('popular_restaurants') }}</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
      <div class="tabs__content pt-40 js-tabs-content">
        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">


            @foreach($restaurants->take(4) as $restaurant)
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1">
                <div class="hotelsCard__image">
                  <div class="cardImage ratio ratio-1:1">
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

                <div class="hotelsCard__content mt-10">
                  <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1">
                    <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                      <span>{{ $restaurant->name }}</span>
                    </h4>
                  </a>
                  <p class="text-light-1 lh-14 text-14 mt-5">Available: {{ $restaurant->available }} Rooms</p>
                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      <span>から</span> <span class="text-green-2">¥{{ number_format($restaurant->price_range) }}</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @endforeach

          </div>


          <div class="row justify-center pt-40">
            <div class="col-auto">
              <a href="{{locale_route('restaurant.search')}}" class="button px-40 h-50 -outline-red text-red">
                {{ translate('load_more') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="layout-pt-md layout-pb-lg">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">{{ translate('restaurant_near_location') }}</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
      <div class="tabs__content pt-40 js-tabs-content">
        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">


            @foreach($restaurants as $restaurant)
            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{ asset('' . $restaurant->logo) }}" alt="{{ $restaurant->name }} logo">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 favourite-btn" data-id="{{ $restaurant->id }}">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>

                    @if($restaurant->discount > 0)
                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                        {{ $restaurant->discount }}% {{ translate('discount') }}
                      </div>
                    </div>
                    @endif

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>{{$restaurant->name}}</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">{{$restaurant->address}}</p>

                  <!-- <div class="d-flex items-center mt-20">
                      <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                      <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                      <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                    </div> -->

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      {{translate('starting_from')}} <span class="text-green-2">¥{{number_format($restaurant->price_range)}}</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>
         </div>
      </div>
      <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
         <div class="tabs__content pt-40 js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
               <div class="row y-gap-30">
                  @foreach($restaurants->take(4) as $restaurant)
                  <div class="col-xl-3 col-lg-3 col-sm-6">
                     <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1">
                        <div class="hotelsCard__image">
                           <div class="cardImage ratio ratio-1:1">
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
                        <div class="hotelsCard__content mt-10">
                     <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1">
                     <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                     <span>{{ $restaurant->name }}</span>
                     </h4>
                     </a>
                     <p class="text-light-1 lh-14 text-14 mt-5">Available: {{ $restaurant->available }} Rooms</p>
                     <div class="mt-5">
                     <div class="fw-500 d-flex justify-content-between">
                     <span>から</span> <span class="text-green-2">¥{{ number_format($restaurant->price_range) }}</span>
                     </div>
                     </div>
                     </div>
                     </a>
                  </div>
                  @endforeach
               </div>
               <div class="row justify-center pt-40">
                  <div class="col-auto">
                     <a href="{{locale_route('restaurant.search')}}" class="button px-40 h-50 -outline-red text-red">
                     {{ translate('load_more') }}
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="layout-pt-md layout-pb-lg">
   <div data-anim-wrap class="container">
      <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
         <div class="col-auto">
            <div class="sectionTitle -md">
               <h2 class="sectionTitle__title">{{ translate('restaurant_near_location') }}</h2>
            </div>
         </div>
      </div>
      <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
         <div class="tabs__content pt-40 js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
               <div class="row y-gap-30">
                  @foreach($restaurants as $restaurant)
                  <div class="col-xl-3 col-lg-3 col-sm-6">
                     <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                           <div class="cardImage ratio ratio-1:1">
                              <div class="cardImage__content">
                                 <img class="rounded-4 col-12" src="{{ asset('' . $restaurant->logo) }}" alt="{{ $restaurant->name }} logo">
                              </div>
                              <div class="cardImage__wishlist">
                                 <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 favourite-btn" data-id="{{ $restaurant->id }}">
                                 <i class="icon-heart text-12"></i>
                                 </button>
                              </div>
                              @if($restaurant->discount > 0)
                              <div class="cardImage__leftBadge">
                                 <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    {{ $restaurant->discount }}% {{ translate('discount') }}
                                 </div>
                              </div>
                              @endif
                           </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                           <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                              <span>{{$restaurant->name}}</span>
                           </h4>
                           <p class="text-light-1 lh-14 text-14 mt-5">{{$restaurant->address}}</p>
                           <!-- <div class="d-flex items-center mt-20">
                              <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                              <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                              <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                              </div> -->
                           <div class="mt-5">
                              <div class="fw-500 d-flex justify-content-between">
                                 {{translate('starting_from')}} <span class="text-green-2">¥{{number_format($restaurant->price_range)}}</span>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  @endforeach
               </div>
               <div class="row justify-center pt-40">
                  <div class="col-auto">
                     <a href="{{locale_route('restaurant.search')}}" class="button px-40 h-50 -outline-red text-red">
                     {{ translate('load_more') }}
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('includes.subscribe')
@endsection
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script>
  document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#check_in", {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      time_24hr: true,
      minDate: "today",
      defaultDate: new Date(),
      onClose: function(selectedDates, dateStr) {
        document.getElementById("check_in").value = dateStr;
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
            toastr.error("最初にログインする必要があります。");
          }
        }
      });
    });
  });
</script>