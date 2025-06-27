@extends('layouts.app')

@section('contents')
<style>
  .fc-today-button {
    display: none !important;
  }

  /* Removed active day highlight styling */
  .closed-day {
    background-color: #ffcccc !important;
    color: red !important;
  }

  .fc-button-group {
    display: none !important;
  }
</style>

<section class="pt-40" style="margin-top: 20px;">
  <div class="container">
    <div class="row y-gap-20 justify-between items-end pb-20">

      <div class="col-12 mb-6">
        <div class="w-100 px-2 py-1 bg-red text-white t-small">
          レストラン詳細
        </div>
      </div>

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
      <div class="d-flex justify-content-between align-items-center" style="padding:10px 23px 5px 23px;">
        <!-- Location Button -->
        <a href="{{ $restaurant->google_map }}" class="d-flex justify-content-center align-items-center text-white" style="width: 178px; background-color: #228B22; border: none; border-radius: 0; padding: 10px; text-decoration: none;">
          <i class="fa-solid fa-location-dot me-2"></i>地図を表示
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
<!-- Calendar Section -->
<div class="calendar-section mt-1 mb-4">
  <div class="calendar-container">
    <div class="calendar-header">
      <button id="prevMonth" class="nav-arrow">
        <i class="fas fa-chevron-left"></i>
      </button>
      <h3 id="currentMonthYear">2025年6月</h3>
      <button id="nextMonth" class="nav-arrow">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>

    <div class="calendar-dates" id="calendarDates">
      <!-- Dates will be populated by JavaScript -->
    </div>



  </div>
</div>

<style>
  /* Calendar Styles */
  .calendar-section {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', Meiryo, sans-serif;
    max-width: 100%;
    margin: 0 auto;
    padding: 0;
  }

  .calendar-container {
    background: transparent;
    padding: 0;
    border: none;
    border-radius: 20px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
  }

  .calendar-header {
    display: none !important;
    /* Old styles kept but commented for reference
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    */
  }

  .nav-arrow {
    background: #f8f9fa;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    padding: 0;
    color: #333;
    transition: all 0.2s;
  }

  .nav-arrow:hover {
    background: #e9ecef;
  }

  .calendar-header h3 {
    margin: 0;
    font-size: 16px;
    font-weight: 500;
    color: #333;
  }

  .calendar-weekdays {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
    margin-bottom: 8px;
    font-size: 12px;
    color: #666;
    border-bottom: 1px solid #eee;
    padding-bottom: 8px;
  }

  .calendar-weekdays .weekday {
    padding: 10px 5px;
    color: #333;
    font-weight: 600;
    font-size: 14px;
  }

  .calendar-weekdays .weekday:first-child {
    color: #ff4b4b;
    /* Red for Sunday */
  }

  .calendar-weekdays .weekday:last-child {
    color: #4b8bf4;
    /* Blue for Saturday */
  }

  /* Day of week colors */
  .day-of-week.sunday-tuesday {
    color: #ff4b4b;
    /* Red for Sunday and Tuesday */
  }

  .day-of-week.saturday {
    color: #4b8bf4;
    /* Blue for Saturday */
  }

  .calendar-dates {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    /* gap: 4px; */
    /* margin-left: -42px; */
    /* padding: 0 42px; */
  }

  .date-cell {
    /* aspect-ratio: 1; */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: none;
    cursor: pointer;
    position: relative;
    background: transparent;
    transition: all 0.2s;
    padding: 8px 0;
  }

  .date-cell:hover {
    background-color: #f8f9fa;
  }

  .date-cell.today {
    /* Removed background color for today's date */
    font-weight: 500;
  }

  /* .date-cell.selected {
    background-color: #f10146;
    color: white;
    border-color: #f10146;
} */

  .date-cell.disabled {
    color: #ddd;
    background-color: #f9f9f9;
    cursor: not-allowed;
    border-color: #f0f0f0;
  }

  .date-cell.empty {
    visibility: hidden;
    border: none;
    background: transparent;
  }

  .date-number {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 4px;
  }

  .date-availability {
    font-size: 22px;
    margin-top: 4px;
    line-height: 1;
    font-weight: 800;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .availability-marker {
    display: inline-block;
    width: 20px;
    text-align: center;
    margin-right: 4px;
  }

  .availability-marker.available {
    color: #4CAF50;
    /* Green for available */
  }

  .availability-marker.limited {
    color: #FFC107;
    /* Yellow for limited */
  }

  .availability-marker.full {
    color: #F44336;
    /* Red for full */
  }

  .availability-legend {
    font-size: 13px;
    color: #666;
    padding: 8px 0;
    border-top: 1px solid #eee;
    margin-top: 10px;
  }

  .availability-ok {
    color: #4CAF50;
    /* Green */
  }

  .availability-warning {
    color: #FFC107;
    /* Yellow */
  }

  .availability-full {
    color: #F44336;
    /* Red */
  }

  /* Responsive adjustments */
  @media (max-width: 576px) {
    .calendar-container {
      padding: 8px;
    }

    .date-number {
      font-size: 12px;
    }

    .date-availability {
      font-size: 10px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const calendarDates = document.getElementById('calendarDates');
    const currentMonthYear = document.getElementById('currentMonthYear');
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');

    // Set today's date to current date
    const today = new Date();
    today.setHours(0, 0, 0, 0); // Normalize time to start of day
    let currentDate = new Date(today);
    let selectedDate = null;

    // Hide navigation buttons since we only show 7 days
    prevMonthBtn.style.display = 'none';
    nextMonthBtn.style.display = 'none';

    // Update month/year display to show date range
    function updateDateRangeDisplay() {
      const endDate = new Date(today);
      endDate.setDate(today.getDate() + 6);

      const formatDate = (date) => {
        return `${date.getMonth() + 1}月${date.getDate()}日`;
      };

      currentMonthYear.textContent = `${formatDate(today)} 〜 ${formatDate(endDate)}`;
    }

    function renderCalendar() {
      // Clear existing dates
      calendarDates.innerHTML = '';

      // Show 7 days starting from today
      for (let i = 0; i < 7; i++) {
        const checkDate = new Date(today);
        checkDate.setDate(today.getDate() + i);

        const dateCell = document.createElement('div');
        dateCell.className = 'date-cell';

        // Check if it's today
        const isToday = i === 0;
        if (isToday) {
          dateCell.classList.add('today');
        }

        // Add date number
        const dateNumber = document.createElement('div');
        dateNumber.className = 'date-number';
        dateNumber.textContent = checkDate.getDate();

        // Add day of week
        const dayOfWeek = document.createElement('div');
        dayOfWeek.className = 'day-of-week';
        const days = ['日', '月', '火', '水', '木', '金', '土'];
        const dayIndex = checkDate.getDay();
        dayOfWeek.textContent = days[dayIndex];

        // Add color classes based on day of week
        if (dayIndex === 0 || dayIndex === 2) { // Sunday (0) or Tuesday (2)
          dayOfWeek.classList.add('sunday-tuesday');
        } else if (dayIndex === 6) { // Saturday
          dayOfWeek.classList.add('saturday');
        }

        // Add availability status
        const availability = document.createElement('div');
        availability.className = 'date-availability';

        // Set default availability status (only 'available' or 'full')
        const status = Math.random() > 0.5 ? 'available' : 'full';
        const symbol = status === 'available' ? '○' : '×';
        availability.textContent = symbol;
        availability.classList.add(`availability-${status}`);

        dateCell.appendChild(dayOfWeek);
        dateCell.appendChild(dateNumber);
        dateCell.appendChild(availability);

        // Add click event
        dateCell.addEventListener('click', function() {
          // Update selected date
          selectedDate = new Date(checkDate);

          // Update UI
          document.querySelectorAll('.date-cell').forEach(cell => {
            cell.classList.remove('selected');
          });
          dateCell.classList.add('selected');

          // Format the date as YYYY-MM-DD
          const formattedDate = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;

          // Redirect to booking detail page with the selected date
          window.location.href = '{{ route("booking.detail", ["id" => $restaurant->id]) }}?date=' + formattedDate;
        });

        // Highlight today's date by default without triggering click
        if (isToday) {
          dateCell.classList.add('selected');
          // Set the selected date to today
          selectedDate = new Date(checkDate);
          // Update the hidden input field if it exists
          const dateInput = document.getElementById('booking_date');
          if (dateInput) {
            dateInput.value = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;
          }
        }

        calendarDates.appendChild(dateCell);
      }

      updateDateRangeDisplay();
    }

    // Initial render
    renderCalendar();
  });
</script>

<div class="col-12">
  <h3 class="text-22 fw-500 pt-40 border-top-light">メニュー</h3>

  @if($menus->isEmpty())
  <p class="text-center text-muted mt-3">メニューが見つかりません。</p>
  @else
  <div class="row w-100 g-3 mt-3">
    @foreach($menus as $menu)
    <div class="col-3 d-flex justify-content-center align-items-center">
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