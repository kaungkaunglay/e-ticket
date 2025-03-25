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

<br>
<div class="col-xl-12 pt-20">
    <div class="" style="background-color: #B22222;">
        <h2 class="mb-3 container" style="color: white;">お気に入りのレストラン</h2>
    </div>

    <div class="card shadow-lg p-4 mt-3">
        <p id="noFavoritesMessage" class="text-center text-muted mt-3" style="display: none;">
            お気に入りのレストランは見つかりませんでした。
        </p>

        @if(!$favorites->isEmpty())
        <div class="container table-responsive">
            <table id="favoritesTable" class="table table-hover table-striped">
                <thead class="thead-dark text-center" style="background-color: #FFA500;color: white;">
                    <tr>
                        <th>レストラン名</th>
                        <th>住所</th>
                        <th>電話番号</th>
                        <th>予約日</th>
                        <th>メールアドレス</th>
                        <th>郵便番号</th>
                        <th>削除</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($favorites as $favorite)
                    <tr>
                        <td><strong>{{ $favorite->name }}</strong></td>
                        <td>{{ $favorite->address }}</td>
                        <td>{{ $favorite->phone_number }}</td>
                        <td class="text-center">{{ $favorite->reservation_date ?? 'N/A' }}</td>
                        <td>{{ $favorite->email }}</td>
                        <td>{{ $favorite->city }}</td>
                        <td class="text-center">{{ $favorite->zip_code }}</td>
                        <td class="text-center">
                            <button class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button><br>
                            <button class="btn btn-danger btn-sm remove-favorite" data-restaurant-id="{{ $favorite->id }}">
                                <i class="fas fa-trash-alt"></i>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
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

        $("#favoritesTable tbody").on("click", ".remove-favorite", function() {
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
                        success: function(response) {
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
                        error: function(xhr) {
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