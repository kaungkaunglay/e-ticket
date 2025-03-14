<div class="tabs__pane -tab-item-2">
    <div class="col-xl-12">
        <h3 class="text-20 fw-600">予約履歴</h3> <!-- Booking History in Japanese -->
        <div class="card p-4 mt-3">
            @if($bookings->isEmpty())
                <p>予約は見つかりませんでした。</p> <!-- No bookings found -->
            @else
                <div class="table-responsive"> 
                    <table id="bookingTable" class="table table-striped table-bordered w-100">
                        <thead>
                            <tr>
                                <th>レストラン名</th> <!-- Restaurant Name -->
                                <th>住所</th> <!-- Address -->
                                <th>市区町村</th> <!-- City -->
                                <th>電話番号</th> <!-- Phone -->
                                <th>価格範囲</th> <!-- Price Range -->
                                <th>予約日</th> <!-- Booking Date -->
                                <th>メモ</th> <!-- Note -->
                                <th>詳細</th> <!-- View -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->restaurant->name }}</td>
                                <td>{{ $booking->restaurant->address }}</td>
                                <td>{{ $booking->restaurant->city }}</td>
                                <td>{{ $booking->restaurant->phone_number }}</td>
                                <td>¥{{ number_format($booking->restaurant->price_range) }}</td>
                                <td>{{ $booking->select_date }}</td>
                                <td>{{ $booking->note ?? 'メモなし' }}</td> <!-- No Note -->
                                <td>
                                    <a href="/restaurant/{{ $booking->restaurant_id }}" title="レストランを見る">
                                        <button class="button -md -dark-1 bg-red h-50 text-white mt-30">プレビュー</button> <!-- Preview -->
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#bookingTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "responsive": true,
            "language": {
                "sProcessing": "処理中...",
                "sLengthMenu": "_MENU_ 件表示",
                "sZeroRecords": "該当するデータが見つかりません。",
                "sInfo": " _TOTAL_ 件中 _START_ から _END_ まで表示",
                "sInfoEmpty": " 0 件中 0 から 0 まで表示",
                "sInfoFiltered": "（全 _MAX_ 件より抽出）",
                "sSearch": "検索:",
                "oPaginate": {
                    "sFirst": "最初",
                    "sPrevious": "前",
                    "sNext": "次",
                    "sLast": "最後"
                }
            }
        });
    });
</script>
@endsection
