@extends('layouts.app')

@section('contents')
<style>
    .loading-spinner {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        white-space: nowrap;
        display: none;
        color: white;
    }
    .button-text {
        transition: opacity 0.3s;
    }
    .is-loading .button-text {
        opacity: 0;
    }
    .is-loading .loading-spinner {
        display: block !important;
    }
    #submit-button {
        position: relative;
        min-height: 60px;
    }
    .datetime-edit {
        cursor: pointer;
        text-decoration: underline;
        color: #F10146;
        font-size: 10px;
        margin-left: 5px;
    }
    .datetime-input-container {
        display: none;
        background: white;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    .datetime-actions {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }
    .datetime-actions button {
        padding: 5px 15px;
        font-size: 12px;
    }
    .time-selector {
        display: flex;
        align-items: center;
        gap: 10px;
        justify-content: center;
        margin: 10px 0;
    }
    .time-selector select {
        padding: 5px 10px;
        border-radius: 4px;
        border: 1px solid #ddd;
        background-color: white;
    }
    .date-picker {
        width: 100%;
        padding: 5px;
        border-radius: 4px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
    }
    .t-small { font-size: 12px; }
    .t-8 { font-size: 8px; }
    .t-10 { font-size: 10px; }
    .t-12 { font-size: 12px; }
    .fs-6 { font-size: 16px; }
</style>

@php
    $dateTime = new DateTime($selectedDateTime);
    $year = $dateTime->format('Y');
    $month = $dateTime->format('n');
    $day = $dateTime->format('j');
    $dayOfWeek = $dateTime->format('D');
    $hour = $dateTime->format('H');
    $minute = $dateTime->format('i');
    
    $dayMap = [
        'Mon' => '月',
        'Tue' => '火',
        'Wed' => '水',
        'Thu' => '木',
        'Fri' => '金',
        'Sat' => '土',
        'Sun' => '日'
    ];
    $dayOfWeekJapanese = $dayMap[$dayOfWeek] ?? '';
    
    // Generate hours (11AM to 10PM)
    $hours = [];
    for ($i = 11; $i <= 22; $i++) {
        $hours[] = str_pad($i, 2, '0', STR_PAD_LEFT);
    }
    
    // Fixed minute options
    $minutes = ['00', '15', '30', '45'];
@endphp

<section class="p-3">
    <h5 class="d-flex border-bottom border-danger">
        <p class="text-danger fw-bold me-2 t-small">{{ $restaurant->name }}</p>
        <p class="fw-400 t-small">{{ $restaurant->address }}</p>
    </h5>
    <p class="my-2 fw-semibold t-small">来店日時 {{ $year }}年 {{ $month }}月 <span class="t-small">{{ $day }}</span>日 ({{ $dayOfWeekJapanese }}) {{ $hour }}:{{ $minute }}</p>
    <p class="fw-400 t-small">¥{{ number_format($restaurant->price_range) }}</p>

    <ul class="list-unstyled">
        <li>
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-check text-primary me-3"></i>
                <h6 class="m-0 fw-bold t-small">ご予約人数の内訳</h6>
            </div>
            <div class="ms-4 ps-2">
                <p class="my-1 t-small">予約人数 <span class="fw-bold">2</span>名(お子様不可)</p>
                <p class="bg-warning text-white px-3 py-2 mt-2 t-8">こちらの店舗ではお子様のご予約は受け付けておりません。詳しくは店舗情報の「お子様連れ」をご確認ください。</p>
            </div>
        </li>
        <li>
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-check text-primary me-3"></i>
                <h6 class="m-0 fw-bold t-small">席の選択</h6>
            </div>
            <div class="ms-4 ps-2">
                <p class="my-2 t-small">
                    テーブル席/禁煙
                    @if($restaurant->smoking == 1)
                    喫煙可 <i class="fa-solid fa-smoking ms-3 fs-6 fw-bold"></i>
                    @else
                    禁煙 <i class="fa-solid fa-ban-smoking ms-3 fs-6 fw-bold"></i>
                    @endif
                </p>
            </div>
        </li>
        <li>
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-circle-check text-primary me-3"></i>
                <h6 class="m-0 fw-bold t-small">その他の情報の入力</h6>
            </div>
            <div class="ms-4 ps-2">
                <p class="my-2 t-small">予約者情報 <span class="bg-danger rounded-4 text-white px-1 t-10">必須</span></p>
                <form action="{{ route('booking.save') }}" method="POST" class="" id="booking-form">
    @csrf
    <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
    <input type="hidden" name="select_date" id="selectedDateTime" value="{{ $selectedDateTime }}">

    <div class="bg-secondary-subtle p-3 me-4 w-100">
        <div class="row mt-1">
            <div class="col-4 justify-center">
                <label style="font-size: 10px">お名前</label>
            </div>
            <div class="col-8 d-flex">
                <div class="me-2">
                    <input type="text" name="first_name" class="w-100 h-75 border-0 p-1 t-small" value="{{ auth()->user()->first_name }}" placeholder="山田">
                </div>
                <div class="">
                    <input type="text" name="last_name" class="w-100 h-75 border-0 p-1 t-small" value="{{ auth()->user()->last_name }}" placeholder="太郎">
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-4 justify-center"><label style="font-size: 10px">お名前(かな)</label></div>
            <div class="col-8 d-flex">
                <div class="me-2">
                    <input type="text" name="first_name_kana" class="w-100 h-75 border-0 p-1 t-small" placeholder="やまだ">
                </div>
                <div class="">
                    <input type="text" name="last_name_kana" class="w-100 h-75 border-0 p-1 t-small" placeholder="たろう">
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-4 justify-center"><label style="font-size: 10px">電話番号</label></div>
            <div class="col-8 align-content-center">
                <input type="tel" name="phone" class="w-100 h-75 border-0 p-1 t-small" value="{{ auth()->user()->phone }}" placeholder="090-1234-5678">
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-4 justify-center"><label style="font-size: 10px">メールアドレス</label></div>
            <div class="col-8 align-content-center">
                <input type="email" name="email" class="w-100 h-75 border-0 p-1 t-small" value="{{ auth()->user()->email }}" placeholder="example@example.com">
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-4 justify-center">
                <label style="font-size: 10px">レストランへのご要望</label>
            </div>
            <div class="col-8 align-content-center">
                <textarea class="border-0 w-75" name="note" cols="20" rows="2" style="resize: none" placeholder="ご要望をお書きください"></textarea>
            </div>
        </div>
    </div>

    <p class="bg-warning text-white px-3 py-2 mt-2 t-8">お手数ですが、ご予約の詳細をご確認いただきますようお願いいたします。</p>

    <div class="bg-secondary-subtle p-3 me-4 w-100">
        <p class="fw-bold text-center t-8">予約成立後にお店へ連絡なくキャンセルされると、サービスのご利用を制限させていただく場合があります。また、予約時にご登録いただいた連絡先が無効な場合、お店の判断により予約がキャンセルとなることがあります。</p>

        <div class="bg-white px-3 py-1 fw-bold text-center t-12">
            <div class="datetime-display">
                来店日時 
                <span class="fw-bold fs-6">{{ $year }}</span>年 
                <span class="fw-bold fs-6">{{ $month }}</span>月 
                <span class="fw-bold fs-6">{{ $day }}</span>日 
                ({{ $dayOfWeekJapanese }}) 
                <span class="fw-bold fs-6">{{ $hour }}:{{ $minute }}</span>
                <span class="datetime-edit" onclick="showDatetimeEdit()">
                    <i class="fas fa-edit"></i> 変更
                </span>
            </div>

            <div class="datetime-input-container">
                <input type="text" id="datePicker" class="date-picker" value="{{ $year }}-{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}-{{ str_pad($day, 2, '0', STR_PAD_LEFT) }}" readonly>

                <div class="time-selector">
                    <select id="hourSelect" class="form-control">
                        @foreach($hours as $h)
                            <option value="{{ $h }}" {{ $h == $hour ? 'selected' : '' }}>{{ $h }}時</option>
                        @endforeach
                    </select>
                    <select id="minuteSelect" class="form-control">
                        @foreach($minutes as $m)
                            <option value="{{ $m }}" {{ $m == $minute ? 'selected' : '' }}>{{ $m }}分</option>
                        @endforeach
                    </select>
                </div>

                <div class="datetime-actions">
                    <button type="button" class="btn btn-sm btn-danger" onclick="saveDatetime()">保存</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="cancelDatetimeEdit()">キャンセル</button>
                </div>
            </div>

            来店人数 <span class="fw-bold fs-6">2</span>名
        </div>

        <div class="d-flex justify-content-center p-3">
            <button type="submit" class="button -md -dark-1 bg-danger text-white mt-30 col-9 mx-auto bg-danger text-white px-2 py-1 text-center rounded-3 t-8" id="submit-button">
                <span class="button-text">
                    利用規約·同意事項·注意事項に同意し、上記内容で <br>
                    <span class="t-10">予約する</span>
                </span>
                <span class="loading-spinner">
                    <i class="fas fa-circle-notch fa-spin me-2"></i> 処理中...
                </span>
            </button>
        </div>
    </div>
</form>

            </div>
        </li>
    </ul>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>

<script>
    let isEditingDatetime = false;
    let datePicker;
    
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize date picker
        datePicker = flatpickr("#datePicker", {
            dateFormat: "Y-m-d",
            locale: "ja",
            minDate: "today",
            defaultDate: "{{ $selectedDateTime }}",
            disable: [
                function(date) {
                    const closedDays = [<?php echo implode(',', array_map('intval', explode(',', $restaurant->closed_days))) ?>];
                    return closedDays.includes(date.getDay());
                }
            ]
        });

        const form = document.getElementById('booking-form');
        const submitButton = document.getElementById('submit-button');

        if (form) {
            form.addEventListener('submit', function(e) {
                if (isEditingDatetime) {
                    e.preventDefault();
                    return;
                }
                submitButton.classList.add('is-loading');
                submitButton.disabled = true;
            });
        }

        @if($errors->any())
        if (submitButton) {
            submitButton.classList.remove('is-loading');
            submitButton.disabled = false;
        }
        @endif
    });

    function showDatetimeEdit() {
        isEditingDatetime = true;
        document.querySelector('.datetime-display').style.display = 'none';
        document.querySelector('.datetime-input-container').style.display = 'block';
        datePicker.open();
    }

    function cancelDatetimeEdit() {
        isEditingDatetime = false;
        document.querySelector('.datetime-display').style.display = 'block';
        document.querySelector('.datetime-input-container').style.display = 'none';
        // Reset to original values
        datePicker.setDate("{{ $selectedDateTime }}");
        document.getElementById('hourSelect').value = "{{ $hour }}";
        document.getElementById('minuteSelect').value = "{{ $minute }}";
    }

    function saveDatetime() {
        const selectedDate = datePicker.selectedDates[0];
        if (!selectedDate) {
            alert('有効な日付を選択してください');
            return;
        }

        const hour = document.getElementById('hourSelect').value;
        const minute = document.getElementById('minuteSelect').value;
        
        const year = selectedDate.getFullYear();
        const month = selectedDate.getMonth() + 1;
        const day = selectedDate.getDate();
        
        const dayMap = {0: '日', 1: '月', 2: '火', 3: '水', 4: '木', 5: '金', 6: '土'};
        const dayOfWeekJapanese = dayMap[selectedDate.getDay()];

        // Update display
        document.querySelector('.datetime-display').innerHTML = `
            来店日時 
            <span class="fw-bold fs-6">${year}</span>年 
            <span class="fw-bold fs-6">${month}</span>月 
            <span class="fw-bold fs-6">${day}</span>日 
            (${dayOfWeekJapanese}) 
            <span class="fw-bold fs-6">${hour}:${minute}</span>
            <span class="datetime-edit" onclick="showDatetimeEdit()">
                <i class="fas fa-edit"></i> 変更
            </span>
        `;

        // Update hidden field
        const formattedDate = `${year}-${String(month).padStart(2, '0')}-${String(day).padStart(2, '0')} ${hour}:${minute}:00`;
        document.getElementById('selectedDateTime').value = formattedDate;

        // Update summary display
        document.querySelector('.fw-semibold').innerHTML = `
            来店日時 ${year}年 ${month}月 <span class="t-small">${day}</span>日 (${dayOfWeekJapanese}) ${hour}:${minute}
        `;

        isEditingDatetime = false;
        cancelDatetimeEdit();
    }
</script>
@endsection