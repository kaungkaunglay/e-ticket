<style>
    .booking-card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        border-left: 4px solid #B22222;
    }
    
    .booking-header {
        background-color: #f8f9fa;
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
        font-weight: bold;
        color: #B22222;
    }
    
    .booking-body {
        padding: 15px;
    }
    
    .booking-row {
        display: flex;
        margin-bottom: 10px;
    }
    
    .booking-label {
        font-weight: bold;
        min-width: 100px;
        color: #555;
    }
    
    .booking-value {
        flex: 1;
    }
    
    .booking-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
        gap: 10px;
    }
    
    .btn-sm {
        flex: 1;
        padding: 8px 12px;
        border-radius: 6px;
    }
    
    .note-badge {
        display: inline-block;
        padding: 5px 10px;
        background-color: #f0f0f0;
        border-radius: 4px;
        margin-top: 5px;
    }
    
    @media (max-width: 576px) {
        .booking-row {
            flex-direction: column;
        }
        
        .booking-label {
            margin-bottom: 3px;
        }
    }
</style>

<div class="col-xl-12 pt-20">
    <div class="" style="background-color: #B22222;">
        <h2 class="mb-3 container" style="color: white;">予約一覧</h2>
    </div>

    <div class="card shadow-lg p-4 mt-3">
        @if($bookings->isEmpty())
        <p id="noBookingsMessage" class="text-center text-muted mt-3">
            <i class="fas fa-calendar-times me-2"></i>予約は見つかりませんでした。
        </p>
        @else
        <p class="mb-3 text-center" style="color: #B22222; font-weight: bold;">
            <i class="fas fa-clipboard-list me-2"></i>現在の予約数: {{ $bookings->count() }}件
        </p>

        <div class="container">
            @foreach($bookings as $booking)
            <div class="booking-card">
                <div class="booking-header">
                    {{ $booking->restaurant->name ?? '未設定' }}
                </div>
                <div class="booking-body">
                    <div class="booking-row">
                        <div class="booking-label">住所</div>
                        <div class="booking-value">{{ $booking->restaurant->address ?? '未設定' }}</div>
                    </div>
                    <div class="booking-row">
                        <div class="booking-label">電話番号</div>
                        <div class="booking-value">{{ $booking->restaurant->phone_number ?? '未設定' }}</div>
                    </div>
                    <div class="booking-row">
                        <div class="booking-label">予約日時</div>
                        <div class="booking-value">
                            @if($booking->select_date)
                                {{ \Carbon\Carbon::parse($booking->select_date)->format('Y/m/d H:i') }}
                            @else
                                未設定
                            @endif
                        </div>
                    </div>
                    <div class="booking-row">
                        <div class="booking-label">価格帯</div>
                        <div class="booking-value">
                            @if($booking->restaurant->price_range)
                                ¥{{ number_format($booking->restaurant->price_range) }}
                            @else
                                未設定
                            @endif
                        </div>
                    </div>
                    <div class="booking-row">
                        <div class="booking-label">メモ</div>
                        <div class="booking-value">
                            @if($booking->note)
                                <span class="note-badge">{{ $booking->note }}</span>
                            @else
                                メモなし
                            @endif
                        </div>
                    </div>
                    
                    <div class="booking-actions">
                        <a href="/restaurant/{{ $booking->restaurant_id }}" 
                           class="btn btn-primary btn-sm"
                           title="レストラン詳細">
                            <i class="fas fa-eye me-1"></i> 詳細
                        </a>
                        <button class="btn btn-danger btn-sm cancel-booking" 
                                data-id="{{ $booking->id }}"
                                title="予約キャンセル">
                            <i class="fas fa-trash-alt me-1"></i> キャンセル
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.cancel-booking').click(function() {
            let bookingId = $(this).data('id');
            Swal.fire({
                title: '予約をキャンセルしますか？',
                text: "この操作は元に戻せません！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'はい、キャンセルします！',
                cancelButtonText: 'いいえ'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('booking.cancel') }}",
                        type: "get",
                        data: {
                            id: bookingId,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            Swal.fire(
                                'キャンセル成功！',
                                '予約がキャンセルされました。',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'エラー',
                                xhr.responseJSON.message || '予約をキャンセルできませんでした。',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>