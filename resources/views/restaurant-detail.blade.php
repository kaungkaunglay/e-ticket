@extends('layouts.app')

@section('contents')
<style>
  .fc-today-button {
    display: none !important;
  }
  .fc-day-selected {
    background-color: #F10146 !important;
    color: white !important;
  }
  .closed-day {
    background-color: #ffcccc !important;
    color: red !important;
  }
  .fc-button-group{
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
            <button class="favourite-btn" data-id="{{ $restaurant->id }}" style="background-color: white; width: 30px; height: 30px; border-radius: 50%; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); border: 1px solid black; display: flex; align-items: center; justify-content: center; margin-left: 80px;">
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

          <div class="m-0 d-flex align-items-start flex-wrap mt-1" style="padding: 17px;">
            @if(!is_null($restaurant->smoking) && $restaurant->smoking)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="font-size: 15px;">
              {{ translate('smoking') }}
            </span>
            @endif
            @if(!is_null($restaurant->wifi_availability) && $restaurant->wifi_availability)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="font-size: 15px;">
              {{ translate('wifi') }}
            </span>
            @endif
            @if(!is_null($restaurant->parking_availability) && $restaurant->parking_availability)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="font-size: 15px;">
              {{ translate('parking') }}
            </span>
            @endif
            @if(!is_null($restaurant->outdoor_seating) && $restaurant->outdoor_seating)
            <span class="border border-2 border-dark fw-bold t-8 m-0 px-3 me-2 mb-1" style="font-size: 15px;">
              {{ translate('outdoor_seat') }}
            </span>
            @endif
          </div>
        </div>
      </div>
    </div>
   <section>
    <div class="d-flex justify-content-between align-items-center" style="padding: 23px;">
  <!-- Location Button -->
  <a href="{{ $restaurant->google_map }}" class="d-flex justify-content-center align-items-center text-white" style="width: 178px; background-color: #228B22; border: none; border-radius: 0; padding: 10px; text-decoration: none;">
    <i class="fa-solid fa-location-dot me-2"></i> 地図を表示
  </a>

  <!-- Booking Button -->
  <button type="button" 
          class="d-flex justify-content-center align-items-center text-white" 
          style="width: 178px; background-color: #F10146; border: none; border-radius: 0; padding: 10px; text-decoration: none;"
          data-bs-toggle="modal" 
          data-bs-target="#bookingModal">
    予約 &nbsp;<i class="fa-solid fa-calendar-check me-2"></i>
  </button>
</div>

{{-- <!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLabel">{{ $restaurant->name }} 予約</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="bookingForm" action="{{ route('booking.detail', ['id' => $restaurant->id]) }}" method="GET">
          @csrf
          
          <!-- Date Selection -->
          <div class="mb-3">
            <label for="bookingDate" class="form-label">日付</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="bookingDate" name="date" required min="{{ date('Y-m-d') }}">
            @error('date')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          
          <!-- Time Selection -->
          <div class="mb-3">
            <label for="bookingTime" class="form-label">時間</label>
            <div class="row">
              <div class="col-6">
                <select class="form-select @error('hour') is-invalid @enderror" id="bookingHour" name="hour" required>
                  <option value="" selected disabled>時</option>
                  @php
                    $openingHour = $restaurant->opening_time ?? 10;
                    $closingHour = $restaurant->closing_time ?? 22;
                  @endphp
                  @for($i = $openingHour; $i <= $closingHour; $i++)
                    <option value="{{ $i }}" {{ old('hour') == $i ? 'selected' : '' }}>
                      {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}時
                    </option>
                  @endfor
                </select>
                @error('hour')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-6">
                <select class="form-select @error('minute') is-invalid @enderror" id="bookingMinute" name="minute" required>
                  <option value="" selected disabled>分</option>
                  <option value="00" {{ old('minute') == '00' ? 'selected' : '' }}>00分</option>
                  <option value="15" {{ old('minute') == '15' ? 'selected' : '' }}>15分</option>
                  <option value="30" {{ old('minute') == '30' ? 'selected' : '' }}>30分</option>
                  <option value="45" {{ old('minute') == '45' ? 'selected' : '' }}>45分</option>
                </select>
                @error('minute')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          
          <!-- Number of Children -->
          <div class="mb-3">
            <label for="bookingPeople" class="form-label">子供の人数</label>
            <select class="form-select @error('people') is-invalid @enderror" id="bookingPeople" name="people" required>
              <option value="" selected disabled>選択してください</option>
              @for($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}" {{ old('people') == $i ? 'selected' : '' }}>{{ $i }}</option>
              @endfor
            </select>
            @error('people')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        <button type="submit" form="bookingForm" class="btn btn-primary">予約確認へ進む</button>
      </div>
    </div>
  </div>
</div> --}}
<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-sm">
      <!-- Modal Header -->
      <div class="modal-header bg-danger text-white border-0">
        <h5 class="modal-title fw-bold fs-6" id="bookingModalLabel">
          <i class="fas fa-utensils me-2"></i>{{ $restaurant->name }} 予約
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-3">
        <form id="bookingForm" action="{{ route('booking.detail', ['id' => $restaurant->id]) }}" method="GET">
          @csrf

          <!-- Date Selection -->
          <div class="mb-3 d-flex justify-content-between align-items-center">
            <label for="bookingDate" class="form-label fw-medium text-muted">
              <i class="fas fa-calendar-alt me-2"></i>日付
            </label>
            <input type="text" class="form-control @error('date') is-invalid @enderror" id="bookingDate" name="date" required min="{{ date('Y-m-d') }}">
            @error('date')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Time Selection -->
          <div class="mb-3">
            <label for="bookingTime" class="form-label fw-medium text-muted">
              <i class="fas fa-clock me-2"></i>時間
            </label>
            <div class="row g-2">
              <div class="col-6">
                <select class="form-select @error('hour') is-invalid @enderror" id="bookingHour" name="hour" required>
                  <option value="" selected disabled>時</option>
                  @php
                    $openingHour = $restaurant->opening_time ?? 10;
                    $closingHour = $restaurant->closing_time ?? 22;
                  @endphp
                  @for($i = $openingHour; $i <= $closingHour; $i++)
                    <option value="{{ $i }}" {{ old('hour') == $i ? 'selected' : '' }}>
                      {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}時
                    </option>
                  @endfor
                </select>
                @error('hour')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-6">
                <select class="form-select @error('minute') is-invalid @enderror" id="bookingMinute" name="minute" required>
                  <option value="" selected disabled>分</option>
                  <option value="00" {{ old('minute') == '00' ? 'selected' : '' }}>00分</option>
                  <option value="15" {{ old('minute') == '15' ? 'selected' : '' }}>15分</option>
                  <option value="30" {{ old('minute') == '30' ? 'selected' : '' }}>30分</option>
                  <option value="45" {{ old('minute') == '45' ? 'selected' : '' }}>45分</option>
                </select>
                @error('minute')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>

          <!-- Number of Children -->
          <div class="mb-3">
            <label for="bookingPeople" class="form-label fw-medium text-muted">
              <i class="fas fa-child me-2"></i>子供の人数
            </label>
            <select class="form-select @error('people') is-invalid @enderror" id="bookingPeople" name="people" required>
              <option value="" selected disabled>選択してください</option>
              @for($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}" {{ old('people') == $i ? 'selected' : '' }}>{{ $i }}</option>
              @endfor
            </select>
            @error('people')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <!-- Price and Operating Hours Info -->
          <div class="bg-light p-3 rounded mb-3">
            <p class="mb-1 text-muted"><i class="fas fa-yen-sign me-2"></i><strong>料金:</strong> ¥1,000</p>
            <p class="mb-0 text-muted"><i class="fas fa-store me-2"></i><strong>営業時間:</strong> [9:00 AM - 10:00 PM]</p>
          </div>
        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer border-0 d-flex ">
        <button type="button" class="btn btn-outline-danger " data-bs-dismiss="modal">
          <i class="fas fa-times me-2"></i>閉じる
        </button>
        <button type="submit" form="bookingForm" class="btn btn-success ">
          <i class="fas fa-check me-2"></i>予約確認へ進む
        </button>
        
      </div>
    </div>
  </div>
</div>


</section> 
<div class="mt-4 mb-5">
  <div id="calendar" style="height: 500px;"></div>
</div>

    <div class="col-12">
      <h3 class="text-22 fw-500 pt-40 border-top-light">メニュー</h3>

      @if($menus->isEmpty())
      <p class="text-center text-muted mt-3">メニューが見つかりません。</p>
      @else
      <div class="row w-100 g-3 mt-3">
        @foreach($menus as $menu)
        <div class="col-3 d-flex justify-content-center align-items-center" >
          <div class="card shadow-sm" style="border: none !important; background: none;">
            <img src="{{ asset($menu->image) }}" alt="{{ $menu->name }}"
              class="rounded-top card-img-top"
              style="object-fit: cover;" />
            <div class="card-body text-center">
              <h5 class="fw-bold text-dark" style="font-size: 8px">{{ $menu->menu }}</h5>
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

<!-- Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/locales-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Set date constraints
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('bookingDate').min = today;
    
    const maxDate = new Date();
    maxDate.setMonth(maxDate.getMonth() + 3);
    document.getElementById('bookingDate').max = maxDate.toISOString().split('T')[0];
    
    // Form validation before submission
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        const date = document.getElementById('bookingDate').value;
        const hour = document.getElementById('bookingHour').value;
        const minute = document.getElementById('bookingMinute').value;
        const people = document.getElementById('bookingPeople').value;
        
        if (!date || !hour || !minute || !people) {
            e.preventDefault();
            alert('すべてのフィールドを入力してください');
        }
    });
});
</script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    // Initialize FullCalendar with date restrictions
    var closedDays = <?php echo json_encode(array_map('intval', explode(',', $restaurant->closed_days))); ?>;
    var calendarEl = document.getElementById('calendar');
    
    if (calendarEl) {
        var today = new Date();
        today.setHours(0, 0, 0, 0); // Set to beginning of day
        
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'ja',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            selectable: true,
            validRange: {
                start: today // Disable all dates before today
            },
            dayCellClassNames: function(arg) {
                let classNames = [];
                
                // Check if date is in the past
                if (arg.date < today) {
                    classNames.push('fc-day-past');
                }
                
                // Check if day is closed
                if (closedDays.includes(arg.date.getDay())) {
                    classNames.push('closed-day');
                }
                
                return classNames;
            },
            dateClick: function(info) {
                // Check if date is in the past
                if (info.date < today) {
                    toastr.error('過去の日付は選択できません');
                    return;
                }
                
                // Check if day is closed
                if (closedDays.includes(info.date.getDay())) {
                    toastr.error('この日は定休日です');
                    return;
                }
                
                // Update booking form date
                document.getElementById('bookingDate').value = info.dateStr;
                
                // Show booking modal
                var bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
                bookingModal.show();
            },
            eventDidMount: function(info) {
                // Style closed days and past days
                if (closedDays.includes(info.date.getDay())) {
                    info.el.style.backgroundColor = '#f8f9fa';
                    info.el.style.color = '#adb5bd';
                    info.el.style.cursor = 'not-allowed';
                }
                if (info.date < today) {
                    info.el.style.backgroundColor = '#f8f9fa';
                    info.el.style.color = '#adb5bd';
                    info.el.style.cursor = 'not-allowed';
                }
            }
        });
        
        calendar.render();
    }

    // Form validation for booking date
    document.getElementById('bookingForm')?.addEventListener('submit', function(e) {
        const dateInput = document.getElementById('bookingDate');
        const selectedDate = new Date(dateInput.value);
        selectedDate.setHours(0, 0, 0, 0);
        
        if (selectedDate < today) {
            e.preventDefault();
            toastr.error('過去の日付は選択できません');
            dateInput.focus();
            return;
        }
        
        // Rest of your validation logic...
    });




});


$(document).ready(function() {
    
    flatpickr("#bookingDate", {
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "Y年m月d日",
        allowInput: true,
        disableMobile: true,
        static: true,
        locale: 'ja',
        defaultDate: "today",
        minDate: "today"
    });
  });
</script>
@endsection

