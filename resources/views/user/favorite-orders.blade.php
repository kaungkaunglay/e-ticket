<div class="tabs__pane -tab-item-4">
    <div class="col-xl-12">
        <div class="card shadow-lg p-4 mt-3">
            <h4 class="text-center mb-3">お気に入りのレストラン</h4>
            <p id="noFavoritesMessage" class="text-center text-muted mt-3" style="display: none;">
    お気に入りのレストランは見つかりませんでした。
</p>
            @if($favorites->isEmpty())
    <!-- <p id="noFavoritesMessage" class="text-center text-muted mt-3">お気に入りのレストランは見つかりませんでした。</p> -->
@else
    <div class="table-responsive">
        <table id="favoritesTable" class="table table-hover table-striped table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                    <th style="display: none;">ID</th>
                    <th>名前</th>
                    <th>カバー画像</th>
                    <th>住所</th>
                    <th>都市</th>
                    <th>郵便番号</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>ウェブサイト</th>
                    <th>営業時間</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($favorites as $favorite)
                <tr id="row-{{ $favorite->id }}">
                    <td class="text-center" style="display: none;"><strong>{{ $favorite->id }}</strong></td>
                    <td><strong>{{ $favorite->name }}</strong></td>
                    <td class="text-center">
                        <img src="{{ json_decode($favorite->cover_image)[0] ?? '' }}" alt="カバー画像" class="img-thumbnail" width="80" />
                    </td>
                    <td>{{ $favorite->address }}</td>
                    <td>{{ $favorite->city }}</td>
                    <td class="text-center">{{ $favorite->zip_code }}</td>
                    <td>{{ $favorite->phone_number }}</td>
                    <td>{{ $favorite->email }}</td>
                    <td class="text-center">
                        <a href="{{ $favorite->website_url }}" target="_blank" class="btn btn-sm btn-primary">
                            訪問する
                        </a>
                    </td>
                    <td class="text-center">{{ $favorite->operating_hours }}</td>
                    <td class="text-center">
                        <button class="btn bg-red btn-sm remove-favorite text-white" data-restaurant-id="{{ $favorite->id }}">
                            削除
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
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  $(document).ready(function () {
    let table = $("#favoritesTable").DataTable({
        responsive: true,
        searching: true,
        lengthChange: true,
        pageLength: 10,
        ordering: true,
        autoWidth: true,
        language: {
            search: "レコードを検索:",
            paginate: {
                next: "次へ",
                previous: "前へ",
            },
        },
    });

    function checkIfTableEmpty() {
        if (table.rows().count() === 0) {
            $("#favoritesTable").parent().hide(); // Hide table
            $("#noFavoritesMessage").show(); // Show message
        } else {
            $("#favoritesTable").parent().show(); // Show table
            $("#noFavoritesMessage").hide(); // Hide message
        }
    }

    // Initial check on page load
    checkIfTableEmpty();

    $("#favoritesTable tbody").on("click", ".remove-favorite", function () {
        let restaurantId = $(this).data("restaurant-id");
        let row = $(this).closest("tr");

        Swal.fire({
            title: "お気に入りを削除しますか？",
            text: "この操作は元に戻せません！",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "はい、削除する",
            cancelButtonText: "キャンセル",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('favorites.remove') }}",
                    type: "get",
                    data: {
                        restaurants_id: restaurantId,
                        _method: "get",
                        _token: "{{ csrf_token() }}",
                    },
                    dataType: "json",
                    success: function (response) {
                        Swal.fire({
                            title: "削除されました！",
                            text: "お気に入りのレストランが削除されました。",
                            icon: "success",
                            confirmButtonText: "OK",
                        });

                        // Remove row from DataTable
                        table.row(row).remove().draw(false);

                        // Check if the table is empty
                        checkIfTableEmpty();
                    },
                    error: function (xhr) {
                        Swal.fire({
                            title: "エラーが発生しました",
                            text: xhr.responseJSON?.message || "削除に失敗しました。",
                            icon: "error",
                            confirmButtonText: "OK",
                        });
                    },
                });
            }
        });
    });
});


</script>
