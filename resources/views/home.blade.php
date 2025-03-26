@extends('includes.layout')
@section('style')
@endsection
@section('contents')
<style>
   .searchMenu-loc,
   .searchMenu-guests {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
   }

   .searchMenu-loc h4,
   .searchMenu-guests h4 {
      text-align: center;
      width: 100%;
   }

   .searchMenu-loc input,
   .searchMenu-guests select {
      text-align: center;
   }

   .searchMenu-loc select,
   .searchMenu-guests select {
      text-align-last: center;
   }

   .text-clamp {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      /* Adjust this to fit about 50 words */
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
   }

   .mainSearch {
      padding: 47px;
      border: 2px solid #ccc;
      border-radius: 34px;
      box-shadow: 0 13px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   }

   .bg-white-bb {
      background-color: #EBEBEB;
   }

   .bodyframe {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 2px solid black;
      background-color: #fff;
      font-size: 16px;
      color: #333;
      transition: 0.3s ease;
      height: 54px;
   }
</style>
<section data-anim-wrap class="masthead -type-4">
   <div class="masthead-slider overflow-x-hidden js-masthead-slider-4">
      <div class="container">
         <div class="row justify-center">
            <div class="col-xl-9">
               <div class="masthead__content">
                  <form action="{{ locale_route('restaurant.search') }}" method="GET">
                     <div class="mainSearch bg-white-bb p-20 lg:p-30 rounded-4 mt-30">
                        <div class="search-grid">
                           <!-- Row 1 -->
                           <div class="search-field">
                              <select id="city" name="city" class="search-input no-arrow text-center">
                                 <option value="">Select City</option>
                                 @foreach($cities as $city)
                                 <option value="{{ $city->id }}">{{ $city->name }}</option>
                                 @endforeach
                              </select>
                           </div>

                           <div class="search-field">
                              <select id="subTown" name="subTown" class="search-input no-arrow text-center" disabled>
                                 <option value="">Select Sub-Town</option>
                              </select>
                           </div>

                           <!-- Row 2 -->
                           <div class="search-field">
                              <input type="date" id="check_in" name="check_in" class="search-input text-center" style="
                                 width: 100%;
                                 padding: 12px;
                                 border-radius: 8px;
                                 border: 2px solid black;
                                 background-color: #fff;
                                 font-size: 16px;
                                 color: #333;
                                 transition: 0.3s ease;
                                 height: 54px;
                              " />
                           </div>

                           <div class="search-field">
                              <select name="price_to" class="search-input no-arrow text-center">
                                 <option value="">Select Price</option>
                                 @foreach($priceRange as $price)
                                 <option value="{{ $price }}">{{ number_format($price) }}</option>
                                 @endforeach
                              </select>
                           </div>

                           <!-- Row 3 -->
                           <div class="search-field">
                              <select name="category" class="search-input no-arrow text-center">
                                 <option value="">Select Category</option>
                                 @foreach ($category as $cat)
                                 <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                 @endforeach
                              </select>
                           </div>

                           <div class="search-field">
                              <select name="smoking" class="search-input no-arrow text-center">
                                 <option value="">Select Smoking Preference</option>
                                 <option value="1">喫煙可</option>
                                 <option value="0">禁煙</option>
                              </select>
                           </div>
                        </div>

                        <!-- Search Button -->
                        <div class="search-button">
                           <button class="search-submit">
                              <i class="icon-search text-20 mr-10"></i>
                              {{ translate('Search') }}
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<style>
   .search-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      margin-bottom: 20px;
   }
   
   .search-input {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 2px solid black;
      background-color: #fff;
      font-size: 16px;
      color: #333;
      transition: 0.3s ease;
      height: 54px;
      text-align: center;
   }
   
   /* Remove dropdown arrows */
   .no-arrow {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-image: none;
      padding-right: 12px; /* Maintain padding balance */
   }
   
   /* Center placeholder text for date input */
   .search-input::placeholder {
      text-align: center;
   }
   
   /* Date input customization */
   input[type="date"]::-webkit-calendar-picker-indicator {
      display: none;
   }
   
   .search-submit {
      background-color: #000;
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: 0.3s ease;
   }
   
   .search-submit:hover {
      background-color: #333;
   }
   
   @media (max-width: 768px) {
      .search-grid {
         grid-template-columns: 1fr;
      }
   }
</style>

@if(!$discountedRestaurants)
<section class="home">
   <div class="container">
      <div class="row y-gap-20 justify-center text-center">
         <div class="col-auto">
            <div class="sectionTitle -md">
               <h2 class="text-25 lh-16 fw-700 pb-20">{{translate('discount_restaurants')}}</h2>
            </div>
         </div>
      </div>
      <div class="relative pt-40 js-section-slider hidden" data-gap="30" data-slider-cols="xl-6 lg-4 md-3 sm-2 base-1">
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
@endif
<section class="pt-20">
   <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
         <div class="col-auto">
            <div class="sectionTitle -md">
               <h2 class="text-25 lh-16 fw-700 pb-20">{{ translate('popular_restaurants') }}</h2>
            </div>
         </div>
      </div>
      <div class="tabs -pills-2 js-tabs">
         <div class="tabs__content js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
               <div class="row y-gap-30">
                  @foreach($restaurants->take(6) as $restaurant)
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
                           <p class="text-light-1 lh-14 text-14 mt-5 text-clamp">{{$restaurant->description}}</p>
                           <div class="mt-5">
                              <div class="fw-500 d-flex justify-content-end align-items-center">
                                 <span class="text-20"><i class="icon-food text-20 mr-10"></i>~ ¥{{ number_format($restaurant->price_range) }}</span>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  @endforeach
               </div>
               <div class="row justify-center pt-20">
                  <div class="col-auto">
                     <a href="{{locale_route('restaurant.search')}}" class="button -dark-1 py-10 px-40 col-12 rounded-4 bg-red text-white mt-5 mb-5">
                        {{ translate('load_more') }}
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="py-20">
   <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
         <div class="col-auto">
            <div class="sectionTitle -md">
               <h2 class="text-25 lh-16 fw-700 pb-20">{{ translate('restaurant_near_location') }}</h2>
            </div>
         </div>
      </div>
      <div class="tabs -pills-2 js-tabs">
         <div class="tabs__content js-tabs-content">
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
                           <p class="text-light-1 lh-14 text-14 mt-5 text-clamp">{{$restaurant->description}}</p>
                           <!-- <div class="d-flex items-center mt-20">
                              <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                              <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                              <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                              </div> -->
                           <div class="mt-5">
                              <div class="fw-500 d-flex justify-content-end">
                                 <span class="text-20"><i class="icon-food text-20 mr-10"></i>~ ¥{{ number_format($restaurant->price_range) }}</span>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  @endforeach
               </div>
               <div class="row justify-center pt-20">
                  <div class="col-auto">
                     <a href="{{locale_route('restaurant.search')}}" class="button -dark-1 py-10 px-40 col-12 rounded-4 bg-red text-white mt-5 mb-5">
                        {{ translate('load_more') }}
                     </a>
                  </div>
               </div>
               <div class="pagination">
                  {{ $restaurants->links('pagination::bootstrap-5') }}
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
         //   enableTime: true,
         dateFormat: "Y-m-d",
         //   time_24hr: true,
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


   $(document).ready(function() {
      $('#city').change(function() {
         var cityId = $(this).val();
         if (cityId) {
            $('#subTown').prop('disabled', false);
            $.ajax({
               url: '/get-sub-towns/' + cityId,
               type: 'GET',
               dataType: 'json',
               success: function(data) {
                  $('#subTown').empty();
                  $('#subTown').append('<option value="">{{ translate('市町区村 ') }}</option>');
                  $.each(data, function(key, value) {
                     $('#subTown').append('<option value="' + value.id + '">' + value.name + '</option>');
                  });
               }
            });
         } else {
            $('#subTown').prop('disabled', true);
            $('#subTown').empty();
            $('#subTown').append('<option value="">{{ translate('市町区村 ') }}</option>');
         }
      });
   });
</script>