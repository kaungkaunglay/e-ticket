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
              <span class="text-22 text-dark-1 fw-500">¥{{ number_format($restaurant->price_range) }}</span>
            </div>
          </div>

          <div class="col-auto">
            <a href="{{ route('booking.detail', ['id' => $restaurant->id]) }}"
              class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
              Booking
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

        <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 favourite-btn" data-id="{{ $restaurant->id }}">
                        <i class="icon-heart text-12"></i>
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
                  <i class="icon-kitchen text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">{{$restaurant->category->name}}</div>
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

          <div class="col-12">
            <h3 class="text-22 fw-500 pt-40 border-top-light">メニュー</h3>

            @if($menus->isEmpty())
            <p class="text-center text-muted mt-3">メニューが見つかりません。</p>
            @else
            <div class="row g-3 mt-3">
              @foreach($menus as $menu)
              <div class="col-md-4 col-sm-6">
                <div class="card border-0 shadow-sm">
                  <img src="{{ asset($menu->image) }}" class="card-img-top rounded-top" alt="{{ $menu->name }}">
                  <div class="card-body text-center">
                    <h5 class="fw-bold text-dark">{{ $menu->menu }}</h5>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            @endif
          </div>


        </div>
      </div>

      <div class="col-xl-4">
        <div class="ml-50 lg:ml-0">
        

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
@endsection