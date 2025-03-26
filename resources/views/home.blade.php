@extends('includes.layout')
@section('style')
@endsection
@section('contents')
<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


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
      border-radius: 49px !important;
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
<section >
        <div class="masthead-slider overflow-x-hidden js-masthead-slider-4">
            <div class="container">
                <div class="row justify-center">
                    <div class="col-xl-9">
                        <div class="masthead__content">
                            <form action="{{ locale_route('restaurant.search') }}" method="GET">
                                <div class="mainSearch bg-white-bb p-20 lg:p-30 rounded-4 mt-30" style="margin-top: 6px !important;">
                                    <div class="search-grid">
                                        <!-- Row 1: 市区町村と地域 -->
                                        <div class="search-field">
                                            <select id="city" name="city" class="search-input">
                                                <option value="">市区町村を選択</option>
                                                @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="search-field">
                                            <select id="subTown" name="subTown" class="search-input" disabled>
                                                <option value="">地域を選択</option>
                                            </select>
                                        </div>

                                        <!-- Row 2: 日付と価格帯 -->
                                        <div class="search-field" style="
                                                border-radius: 8px;
                                                border: 2px solid black;
                                                background-color: #fff;
                                             ">
                                            <input 
                                                type="date" 
                                                id="check_in" 
                                                name="check_in" 
                                                class="search-input" 
                                                placeholder="日付を選択"
                                            />
                                        </div>

                                        <div class="search-field">
                                            <select name="price_to" class="search-input">
                                                <option value="">価格帯を選択</option>
                                                @foreach($priceRange as $price)
                                                <option value="{{ $price }}">{{ number_format($price) }}円</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Row 3: カテゴリと喫煙 -->
                                        <div class="search-field">
                                            <select name="category" class="search-input">
                                                <option value="">カテゴリを選択</option>
                                                @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="search-field">
                                            <select name="smoking" class="search-input">
                                                <option value="">喫煙設定</option>
                                                <option value="1">喫煙可</option>
                                                <option value="0">禁煙</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Search Button -->
                                    <div class="search-button">
                                        <button class="search-submit">
                                            <i class="icon-search text-20 mr-10"></i>
                                            検索
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
        /* Reset default dropdown styles */
        .search-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
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
            cursor: pointer;
        }
        
        /* Custom dropdown arrow */
        .search-field {
            position: relative;
        }
        
        .search-field::after {
            content: "▼";
            font-size: 12px;
            color: #333;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        
        /* Remove custom arrow for date input */
        input[type="date"].search-input ~ .search-field::after {
            display: none;
        }
        
        /* Disabled state */
        .search-input:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }
        
        /* Existing styles */
        .mainSearch {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            margin-top: -81px !important;
        }
        
        .search-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .search-button {
            margin-top: 20px;
            text-align: center;
        }
        
        .search-submit {
         background-color: #0553c5;
    color: #fff;
    padding: 12px 24px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
    width: 247px;
        }
        .towbutton{
         margin-top: 26px;
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

<section class="towbutton">
   <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
         <div class="col-auto">
            <!-- First Search Button (Red) -->
            <div class="search-button mb-10" bis_skin_checked="1">
               <button class="search-submit" style="background-color:var(--color-red) !important; color: white; padding: 10px 20px; border: none; cursor: pointer;">
                  検索
               </button>
            </div>

            <!-- Second Search Button (Yellow) -->
            <div class="search-button mt-10" bis_skin_checked="1">
               <button class="search-submit" style="background-color: #fba405; color: black; padding: 10px 20px; border: none; cursor: pointer;">
                  検索
               </button>
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