@extends('includes.layout') @section('style') @endsection @section('contents')

<section style="background-color: #b22222; color: white; padding: 10px; display: flex; align-items: center;">
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 10px;">
            <div class="col-auto">
                <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px; font-size: 14px; color: white;">
                    <div class="col-auto">
                        <div>レストラン詳細</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="row y-gap-20 justify-between items-end pb-20">
            <div class="col-auto">
                <div class="row x-gap-20 items-center">
                    <div class="col-auto">
                        <h1 class="text-30 sm:text-25 fw-600">{{ $restaurant->name }}</h1>
                    </div>
                </div>

                <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center text-15 text-light-1">
                            <i class="icon-location text-16 mr-5"></i>
                            {{$restaurant->address}}
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex items-center text-15 text-light-1" style="color: red;">
                            <i class="icon-kitchen text-16 mr-5"></i>
                            {{$restaurant->category->name}}
                        </div>
                    </div>
                    <!-- Heart button moved to beginning of this row -->
                    <div class="col-auto">
                        <button
                            class="favourite-btn"
                            data-id="{{ $restaurant->id }}"
                            style="
                                background-color: white;
                                width: 30px;
                                height: 30px;
                                border-radius: 50%;
                                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
                                border: 1px solid black;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                margin-left: 80px;
                            "
                        >
                            <i class="icon-heart" style="font-size: 12px;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="galleryGrid -type-1 pt-30">
        <div class="galleryGrid__item relative d-flex">
            @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[0] ?? null; @endphp @if($firstImage)
            <img src="{{ asset($firstImage) }}" alt="Restaurant Image" class="rounded-4" />
            @endif @endif

            <div class="cardImage__wishlist">
                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 favourite-btn" data-id="{{ $restaurant->id }}">
                    <i class="icon-heart text-12"></i>
                </button>
            </div>
        </div>
        <div class="galleryGrid__item relative d-flex">
            @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[1] ?? null; @endphp @if($firstImage)
            <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
            @endif @endif
            <div class="galleryGrid__item">
                @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[2] ?? null; @endphp @if($firstImage)
                <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
                @endif @endif
            </div>
        </div>

        <div class="galleryGrid__item">
            @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[2] ?? null; @endphp @if($firstImage)
            <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
            @endif @endif
        </div>

        <div class="galleryGrid__item relative d-flex">
            @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[3] ?? null; @endphp @if($firstImage)
            <img src="{{ asset($firstImage) }}" alt="image" class="rounded-4" />
            @endif @endif @if($restaurant->multi_images) @php $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images; $firstImage = $images[0] ?? null; @endphp
            <!-- @if($firstImage)
        <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
          <a href="{{ asset($firstImage) }}" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">
            {{translate('see_all')}} {{ count($images) }} {{translate('photos')}}
          </a>

          @foreach($images as $image)
          <a href="{{ asset($image) }}" class="js-gallery" data-gallery="gallery2"></a>
          @endforeach
        </div> -->
            @endif @endif
        </div>
    </div>
</section>

<section class="pt-30">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-xl-8">
                <div class="row y-gap-40">
                    <div id="overview" class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">{{translate('overview')}}</h3>
                        <p class="text-dark-1 text-15 mt-20">
                            {{$restaurant->description}}
                        </p>
                    </div>
                    <div class="col-md">
                        <div class="row x-gap-10 y-gap-10 pt-20">
                            @if($restaurant->smoking)
                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('smoking')}}</div>
                            </div>
                            @endif @if($restaurant->wifi_availability)
                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('wifi')}}</div>
                            </div>
                            @endif @if($restaurant->parking_availability)

                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('parking')}}</div>
                            </div>
                            @endif @if($restaurant->outdoor_seating)

                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{translate('outdoor_seat')}}</div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h3 class="text-22 fw-500 pt-40 border-top-light">メニュー</h3>

            @if($menus->isEmpty())
            <p class="text-center text-muted mt-3">メニューが見つかりません。</p>
            @else
            <div class="row g-3 mt-3">
                @foreach($menus as $menu)
                <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center" style="width: 21% !important;">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset($menu->image) }}" class="card-img-top rounded-top" alt="{{ $menu->name }}" />
                        <div class="card-body text-center">
                            <!-- <h5 class="fw-bold text-dark">{{ $menu->menu }}</h5> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>
<div id="reviews"></div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/locales-all.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#date-picker", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true,
            onClose: function (selectedDates) {
                if (selectedDates.length === 1) {
                    document.getElementById("check_in").value = flatpickr.formatDate(selectedDates[0], "Y-m-d H:i");
                }
            },
        });
    });

    $(document).ready(function () {
        $(".favourite-btn").click(function (e) {
            e.preventDefault();

            let restaurantId = $(this).data("id");
            let token = "{{ csrf_token() }}";

            $.ajax({
                url: "{{ route('booking.favourite') }}",
                type: "GET",
                data: {
                    _token: token,
                    restaurants_id: restaurantId,
                },
                success: function (response) {
                    toastr.success(response.message);
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        toastr.error("Invalid request. Please try again.");
                    } else {
                        toastr.error("'最初にログインする必要があります。");
                    }
                },
            });
        });
    });
</script>
<?php
$closedDays = json_encode(array_map('intval', explode(',', $restaurant->closed_days))); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      var closedDays = <?php echo $closedDays; ?>;
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ja',
        dayCellDidMount: function(info) {
          var day = info.date.getDay();

          if (closedDays.includes(day)) {
            info.el.style.backgroundColor = '#ffcccc';
            info.el.style.color = 'red';
          }
        }
      });

      calendar.render();
    });
</script>

@endsection
