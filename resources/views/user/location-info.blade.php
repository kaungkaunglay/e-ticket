<div class="tabs__pane -tab-item-2">
    <div class="col-xl-12">
        <h3 class="text-20 fw-600 mb-3">予約履歴</h3>

        @if($bookings->isEmpty())
        <p class="text-center text-muted">予約は見つかりませんでした。</p>
        @else

        <p class="mb-3 fw-bold text-primary">合計予約数: {{ $bookings->count() }}</p>

        <div class="table-responsive">
            <table id="bookingTable" class="table table-hover w-100">
                <thead class="bg-light">
                    <tr class="text-dark fw-bold">
                        <th>レストラン名</th>
                        <th>住所</th>
                        <th>市区町村</th>
                        <th>電話番号</th>
                        <th>価格範囲</th>
                        <th>予約日</th>
                        <th>メモ</th>
                        <th>詳細</th>
                        <th>キャンセル</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td class="align-middle">{{ $booking->restaurant->name }}</td>
                        <td class="align-middle">{{ $booking->restaurant->address }}</td>
                        <td class="align-middle">{{ $booking->restaurant->city }}</td>
                        <td class="align-middle">{{ $booking->restaurant->phone_number }}</td>
                        <td class="align-middle text-success">¥{{ number_format($booking->restaurant->price_range) }}</td>
                        <td class="align-middle text-info fw-bold">{{ $booking->select_date }}</td>
                        <td class="align-middle">{{ $booking->note ?? 'メモなし' }}</td>
                        <td class="align-middle text-center">
                            <a href="/restaurant/{{ $booking->restaurant_id }}" title="レストランを見る">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye"></i> プレビュー
                                </button>
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <button class="btn btn-outline-danger btn-sm cancel-booking" data-id="{{ $booking->id }}">
                                <i class="fas fa-times-circle"></i> キャンセル
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