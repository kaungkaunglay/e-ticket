@extends('includes.layout')
@section('style')

@endsection
@section('contents')
<style>
    input[type="search"]::-webkit-search-cancel-button {
        display: none;
    }
</style>
<section class="pt-40 pb-40 bg-light-2">
    <form action="{{ locale_route('restaurant.search') }}" method="GET">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center mb-3">
                        <h1 class="text-30 fw-600">
                            @if($query)
                            Search Results for "{{ $query }}"
                            @else
                            {{ translate('restaurant_near') }}
                            @endif
                        </h1>
                    </div>

                    <div class="mainSearch -col-5 bg-white px-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">

                        <div class="button-grid" style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                            <!-- Location Input -->
                            <div class="searchMenu-loc flex-grow-1">
                                <!-- <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('location') }}</h4> -->
                                <div class="text-15 text-light-1 ls-2 lh-16">
                                <select id="city" name="citydata" class="js-search js-dd-focus w-100">
                                <option value="">{{ translate('select_city') }}</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $query == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                      </div>
                            </div>

                            <!-- Location Input -->
                            <div class="searchMenu-loc flex-grow-1">
                                <!-- <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('location') }}</h4> -->
                                <div class="text-15 text-light-1 ls-2 lh-16">
                                <select id="subTown" name="sub_towns" class="js-search js-dd-focus w-100" {{ $subtownsdata ? '' : 'disabled' }}>
    <option value="">{{ translate('select_sub_location') }}</option>
    @if($subtownsdata)
        @foreach($subTowns as $subTown)
            <option value="{{ $subTown->id }}" {{ $subtownsdata == $subTown->id ? 'selected' : '' }}>
                {{ $subTown->name }}
            </option>
        @endforeach
    @endif
</select>
                                </div>
                            </div>
                            <!-- Price Range: To -->
                            <div class="searchMenu-loc flex-grow-1">
                                <!-- <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('price_with_to') }}</h4> -->
                                <select class="form-control" name="price_to">
                                    <option value="">{{ translate('Select Price Range') }}</option>
                                    @if(is_array($priceRangedata) || $priceRangedata instanceof \Traversable)
                                    @foreach($priceRangedata as $price)
                                    <option value="{{ $price }}" {{ $priceTo == $price ? 'selected' : '' }}>{{ number_format($price) }}</option>
                                    @endforeach
                                    @else
                                    <option value="">{{ translate('No price range available') }}</option>
                                    @endif
                                </select>
                            </div>

                            <!-- Category Dropdown -->
                            <div class="searchMenu-loc flex-grow-1">
                                <!-- <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('Select Category') }}</h4> -->
                                <select class="form-control" name="category">
                                    <option value="">{{ translate('Select Category') }}</option>
                                    @if(isset($categorydata) && is_iterable($categorydata))
                                    @foreach ($categorydata as $cat)
                                    <option value="{{ $cat->id }}" {{ $category == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                    @endforeach
                                    @else
                                    <option value="">{{ translate('No categories available') }}</option>
                                    @endif
                                </select>
                            </div>

                            <!-- Smoking Preference Dropdown -->
                            <div class="searchMenu-loc flex-grow-1">
                                <!-- <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('Smoking') }}</h4> -->
                                <select class="form-control" name="smoking">
                                    <option value="">{{ translate('Select Smoking Preference') }}</option>
                                    <option value="1" {{ $smoking == '1' ? 'selected' : '' }}>{{ translate('Allowed') }}</option>
                                    <option value="0" {{ $smoking == '0' ? 'selected' : '' }}>{{ translate('Not Allowed') }}</option>
                                </select>
                            </div>

                            <!-- Search Button -->
                            <div class="button-item flex-grow-1">
                                <button class="mainSearch__submit button -dark-1 py-10 px-40 col-12 rounded-4 bg-blue-1 text-white mt-5 mb-5">
                                <i class="icon-search text-20 mr-10"></i>
                                {{ translate('search') }}
                                </button>
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
           


            <div class="col-xl-9 col-lg-8">
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
                                        {{ $restaurant->name }}<br class="lg:d-none"> {{ $restaurant->category->name }}, {{ $restaurant->city }}
                                    </h3>

                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <p class="text-14">{{ $restaurant->address }}</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ $restaurant->google_map }}" class="d-block text-14 text-blue-1 underline">{{ translate('show_on_map') }}</a>
                                        </div>
                                    </div>

                                    <div class="text-14 lh-15 mt-20">
                                        <div class="fw-500">{{ translate('about_restaurant') }}</div>
                                        <div class="text-light-1">{{ mb_strimwidth($restaurant->description, 0, 80, '...') }}</div>
                                    </div>

                                    <div class="text-14 text-green-2 lh-15 mt-10">
                                        <div class="fw-500">{{ translate('free_cancellation') }}</div>
                                        <div class="">{{ translate('cancel_later') }}</div>
                                    </div>

                                    <div class="row x-gap-10 y-gap-10 pt-20">
                                        @if(!is_null($restaurant->smoking) && $restaurant->smoking)
                                        <div class="col-auto">
                                            <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{ translate('smoking') }}</div>
                                        </div>
                                        @endif
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
                                    <div class="fw-500 d-flex justify-content-end">
                                        <span class="text-22 lh-12 fw-600 mt-5"><i class="icon-food text-20 mr-10"></i>~ ¥{{ number_format($restaurant->price_range) }}</span>
                                    </div>

                                    <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                                        {{ translate('see_availability') }}
                                        <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                       

                @if ($restaurants->isEmpty())
                    <p class="text-center text-muted">データがありません。</p>
                @else
                    @if ($restaurants->lastPage() > 1)
                        <div class="border-top-light mt-30 pt-30">
                            <div class="row justify-center align-items-center">
                                <div class="col-auto">
                                    @if ($restaurants->onFirstPage())
                                        <button class="button -blue-1 size-40 rounded-full border-light" disabled>
                                            <i class="icon-chevron-left text-12"></i>
                                        </button>
                                    @else
                                        <a href="{{ $restaurants->previousPageUrl() }}" class="button -blue-1 size-40 rounded-full border-light">
                                            <i class="icon-chevron-left text-12"></i>
                                        </a>
                                    @endif
                                </div>

                                <div class="col-auto d-flex">
                                    @for ($page = 1; $page <= $restaurants->lastPage(); $page++)
                                        <a href="{{ $restaurants->url($page) }}" class="mx-2">
                                            <div class="size-40 flex-center rounded-full {{ $restaurants->currentPage() == $page ? 'bg-dark-1 text-white' : 'border-light' }}">
                                                {{ $page }}
                                            </div>
                                        </a>
                                    @endfor
                                </div>

                                <div class="col-auto">
                                    @if ($restaurants->hasMorePages())
                                        <a href="{{ $restaurants->nextPageUrl() }}" class="button -blue-1 size-40 rounded-full border-light">
                                            <i class="icon-chevron-right text-12"></i>
                                        </a>
                                    @else
                                        <button class="button -blue-1 size-40 rounded-full border-light" disabled>
                                            <i class="icon-chevron-right text-12"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
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
                        toastr.error("'最初にログインする必要があります。");
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
                        $('#subTown').append('<option value="">{{ translate('select_sub_location') }}</option>');
                        $.each(data, function(key, value) {
                            $('#subTown').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#subTown').prop('disabled', true);
                $('#subTown').empty();
                $('#subTown').append('<option value="">{{ translate('select_sub_location') }}</option>');
            }
        });
    });
</script>