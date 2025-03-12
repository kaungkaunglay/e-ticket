<div class="tabs__pane -tab-item-4">
    <div class="col-xl-12">
        <div class="card shadow-lg p-4 mt-3">
            <h4 class="text-center mb-3">Favorite Restaurants</h4>
            @if($favorites->isEmpty())
            <p class="text-center text-muted">No favorite restaurants found.</p>
            @else
            <div class="table-responsive">
                <table id="favoritesTable" class="table table-hover table-striped table-bordered">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th style="display: none;">ID</th>
                            <th>Name</th>
                            <th>Cover Image</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>ZIP Code</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Operating Hours</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($favorites as $favorite)
                        <tr id="row-{{ $favorite->id }}">
                            <td class="text-center" style="display: none;"><strong>{{ $favorite->id }}</strong></td>
                            <td><strong>{{ $favorite->name }}</strong></td>
                            <td class="text-center">
                                <img src="{{ json_decode($favorite->cover_image)[0] ?? '' }}" alt="Cover Image" class="img-thumbnail" width="80" />
                            </td>
                            <td>{{ $favorite->address }}</td>
                            <td>{{ $favorite->city }}</td>
                            <td class="text-center">{{ $favorite->zip_code }}</td>
                            <td>{{ $favorite->phone_number }}</td>
                            <td>{{ $favorite->email }}</td>
                            <td class="text-center">
                                <a href="{{ $favorite->website_url }}" target="_blank" class="btn btn-sm btn-primary">
                                    Visit
                                </a>
                            </td>
                            <td class="text-center">{{ $favorite->operating_hours }}</td>
                            <td class="text-center">
                                <button class="btn btn-danger btn-sm remove-favorite" data-restaurant-id="{{ $favorite->id }}">
                                    Remove
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
                            table.row(row).remove().draw(false);
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
