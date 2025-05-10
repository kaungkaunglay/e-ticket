@extends('layouts.app')

@section('contents')


<style>
  .fc-today-button {
    display: none !important;
  }
</style>
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
                            ">
              <i class="icon-heart" style="font-size: 12px;"></i>
            </button>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container" style="padding: 20px;">
    <div class="row g-1" style="display: flex; flex-wrap: nowrap; overflow-x: auto; margin-left: 0; margin-right: 0;">
      @if($restaurant->multi_images)
        @php
          $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images;
          $displayImages = array_slice($images, 0, 4);
        @endphp

        @foreach($displayImages as $key => $image)
          <div class="col" style="flex: 0 0 25%; max-width: 25%; padding-left: 5px; padding-right: 5px;">
            <div class="gallery-frame" style="height: 115px; overflow: hidden;">
              <img src="{{ asset($image) }}" 
                   alt="Restaurant image {{ $key+1 }}" 
                   style="width: 100%; height: 100%; object-fit: cover;">
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>

<section class="pt-30">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-18">
        <div class="row y-gap-40">
          <div id="overview" class="col-12">
            <h3 class="text-22 fw-500 pt-40 border-top-light">{{translate('overview')}}</h3>
            <p class="text-dark-1 text-15 mt-20">
              {{$restaurant->description}}
            </p>
            <div class="col-auto">
              <div class="fw-500 d-flex justify-content-start align-items-center">
                <span class="text-20"><i class="icon-food text-20 mr-10"></i>~ ¥{{ number_format($restaurant->price_range) }}</span>
              </div>
            </div><br>
            <div class="col-auto">
              <div class="d-flex items-center text-15 text-light-1">
                <i class="icon-bell-ring text-16 mr-5"></i>
                {{translate('operating_hours')}} [{{$restaurant->operating_hours}}]
              </div>
            </div>
          </div>



          <div class="m-0 d-flex align-items-start flex-wrap mt-1" style="
    padding: 17px;
">
            @if(!is_null($restaurant->smoking) && $restaurant->smoking)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="
    font-size: 15px;
">
              {{ translate('smoking') }}
            </span>
            @endif
            @if(!is_null($restaurant->wifi_availability) && $restaurant->wifi_availability)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="
    font-size: 15px;
">
              {{ translate('wifi') }}
            </span>
            @endif
            @if(!is_null($restaurant->parking_availability) && $restaurant->parking_availability)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="
    font-size: 15px;
">
              {{ translate('parking') }}
            </span>
            @endif
            @if(!is_null($restaurant->outdoor_seating) && $restaurant->outdoor_seating)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="
    font-size: 15px;
">
              {{ translate('outdoor_seat') }}
            </span>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between align-items-center" style="
    padding: 23px;
">
      <!-- Location Button -->
      <a href="{{ $restaurant->google_map }}" class="d-flex justify-content-center align-items-center text-white" style="
        width: 178px;
        background-color: #228B22;
        border: none;
        border-radius: 0;
        padding: 10px;
        text-decoration: none;
    ">
        <i class="fa-solid fa-location-dot me-2"></i> 地図を表示
      </a>

      <!-- Booking Button -->
      <a href="{{ route('booking.detail', ['id' => $restaurant->id]) }}" class="d-flex justify-content-center align-items-center text-white" style="
        width: 178px;
        background-color: #F10146;
        border: none;
        border-radius: 0;
        padding: 10px;
        text-decoration: none;
    ">
        予約 &nbsp;<i class="fa-solid fa-calendar-check me-2"></i>
      </a>
    </div>



    <div>
      <div id="calendar"></div>
    </div>

    <div class="col-12">
      <h3 class="text-22 fw-500 pt-40 border-top-light">メニュー</h3>

      @if($menus->isEmpty())
      <p class="text-center text-muted mt-3">メニューが見つかりません。</p>
      @else
      <div class="row g-3 mt-3">
        @foreach($menus as $menu)
        <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center" style="width: 21% !important;">
          <div class="card shadow-sm" style="border: none !important; background: none;">
            <img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}"
              class="rounded-top"
              style="width: 70px; height: 50px; object-fit: cover;" />
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
  document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#date-picker", {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      time_24hr: true,
      onClose: function(selectedDates) {
        if (selectedDates.length === 1) {
          document.getElementById("check_in").value = flatpickr.formatDate(selectedDates[0], "Y-m-d H:i");
        }
      },
    });
  });

  $(document).ready(function() {
    $(".favourite-btn").click(function(e) {
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
        success: function(response) {
          toastr.success(response.message);
        },
        error: function(xhr) {
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