<style>
    .dataTables_length {
        display: none;
    }
    .dataTables_filter {
        display: none;
    }
    .dataTables_info {
        display: none;
    }
    .dataTables_paginate {
        display: none;
    }
</style>

<div class="col-xl-12 pt-20">
    <div class="" style="background-color: #B22222;">
        <h2 class="mb-3 container" style="color: white;">予約一覧</h2>
    </div>

    <div class="card shadow-lg p-4 mt-3">
        <p id="noBookingsMessage" class="text-center text-muted mt-3" style="display: none;">
            予約は見つかりませんでした。
        </p>

        @if(!$bookings->isEmpty())
        <div class="container table-responsive">
            <table id="bookingTable" class="table table-hover table-striped">
                <thead class="thead-dark text-center" style="background-color: #FFA500;color: white;">
                    <tr>
                        <th>レストラン名</th>
                        <th>住所</th>
                        <th>電話番号</th>
                        <th>予約日</th>
                        <th>価格範囲</th>
                        <th>メモ</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td><strong>{{ $booking->restaurant->name }}</strong></td>
                        <td>{{ $booking->restaurant->address }}</td>
                        <td>{{ $booking->restaurant->phone_number }}</td>
                        <td class="text-center">{{ $booking->select_date }}</td>
                        <td class="text-center">¥{{ number_format($booking->restaurant->price_range) }}</td>
                        <td>{{ $booking->note ?? 'メモなし' }}</td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button><br>
                            <button class="btn btn-danger btn-sm cancel-booking" data-id="{{ $booking->id }}">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#bookingTable').DataTable({
            "pageLength": 5,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "language": {
                "lengthMenu": "表示 _MENU_ 件",
                "zeroRecords": "該当する予約がありません",
                "infoEmpty": "該当するデータはありません",
                "search": "検索:",
                "paginate": {
                    "first": "最初",
                    "last": "最後",
                    "next": "次へ",
                    "previous": "前へ"
                }
            }
        });

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


<style>
    body {
        background-color: #f5f5f5;
    }

    .table thead th {
        text-align: center;
        vertical-align: middle;
        padding: 12px;
    }

    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 8px;
    }

    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }

    .btn-outline-danger {
        border-color: #dc3545;
        color: #dc3545;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: white;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }

    .text-primary {
        font-size: 18px;
    }

    .text-muted {
        font-size: 16px;
        color: gray;
    }
</style>