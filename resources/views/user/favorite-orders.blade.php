<style>
    .favorite-card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        border-left: 4px solid #B22222;
        overflow: hidden;
    }
    
    .favorite-header {
        background-color: #f8f9fa;
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
        font-weight: bold;
        color: #B22222;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .favorite-body {
        padding: 15px;
    }
    
    .favorite-row {
        display: flex;
        margin-bottom: 10px;
        flex-wrap: wrap;
    }
    
    .favorite-label {
        font-weight: bold;
        min-width: 100px;
        color: #555;
        margin-bottom: 5px;
    }
    
    .favorite-value {
        flex: 1;
        word-break: break-word;
    }
    
    .favorite-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 15px;
    }
    
    .btn-sm {
        padding: 8px 12px;
        border-radius: 6px;
        min-width: 80px;
    }
    
    .no-favorites {
        text-align: center;
        padding: 30px;
        color: #666;
        font-size: 1.1rem;
    }
    
    .favorite-badge {
        display: inline-block;
        padding: 3px 8px;
        background-color: #f0f0f0;
        border-radius: 4px;
        font-size: 0.9rem;
        margin: 2px 0;
    }
    
    @media (max-width: 576px) {
        .favorite-row {
            flex-direction: column;
        }
        
        .favorite-label {
            margin-bottom: 3px;
            min-width: auto;
        }
        
        .favorite-actions {
            flex-direction: column;
        }
        
        .btn-sm {
            width: 100%;
        }
    }
</style>

<div class="col-xl-12 pt-20">
    <div class="" style="background-color: #B22222;">
        <h2 class="mb-3 container" style="color: white;">お気に入りのレストラン</h2>
    </div>

    <div class="card shadow-lg p-4 mt-3">
        @if($favorites->isEmpty())
        <div id="noFavoritesMessage" class="no-favorites">
            <i class="fas fa-heart-broken fa-2x mb-3" style="color: #ccc;"></i>
            <p>お気に入りのレストランは見つかりませんでした。</p>
        </div>
        @else
        <div class="container">
            @foreach($favorites as $favorite)
            <div class="favorite-card" id="favorite-{{ $favorite->id }}">
                <div class="favorite-header">
                    <span>{{ $favorite->name }}</span>
                    <button class="btn btn-danger btn-sm remove-favorite" data-restaurant-id="{{ $favorite->id }}">
                        <i class="fas fa-trash-alt"></i> 削除
                    </button>
                </div>
                <div class="favorite-body">
                    <div class="favorite-row">
                        <div class="favorite-label">住所</div>
                        <div class="favorite-value">{{ $favorite->address }}</div>
                    </div>
                    <div class="favorite-row">
                        <div class="favorite-label">電話番号</div>
                        <div class="favorite-value">{{ $favorite->phone_number }}</div>
                    </div>
                    <div class="favorite-row">
                        <div class="favorite-label">予約日</div>
                        <div class="favorite-value">{{ $favorite->reservation_date ?? 'N/A' }}</div>
                    </div>
                    <div class="favorite-row">
                        <div class="favorite-label">メールアドレス</div>
                        <div class="favorite-value">{{ $favorite->email }}</div>
                    </div>
                    <div class="favorite-row">
                        <div class="favorite-label">郵便番号</div>
                        <div class="favorite-value">{{ $favorite->zip_code }}</div>
                    </div>
                    
                    <div class="favorite-actions">
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i> 詳細
                        </a>
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
        $('.remove-favorite').click(function() {
            let restaurantId = $(this).data('restaurant-id');
            let cardElement = $(this).closest('.favorite-card');
            
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
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            Swal.fire({
                                title: "削除されました！",
                                text: "お気に入りのレストランが削除されました。",
                                icon: "success",
                                confirmButtonText: "OK",
                            });
                            
                            // Remove the card with animation
                            cardElement.fadeOut(300, function() {
                                $(this).remove();
                                
                                // Check if no favorites left
                                if($('.favorite-card').length === 0) {
                                    $('.container').html(`
                                        <div id="noFavoritesMessage" class="no-favorites">
                                            <i class="fas fa-heart-broken fa-2x mb-3" style="color: #ccc;"></i>
                                            <p>お気に入りのレストランは見つかりませんでした。</p>
                                        </div>
                                    `);
                                }
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "エラーが発生しました",
                                text: xhr.responseJSON?.message || "削除に失敗しました。",
                                icon: "error",
                                confirmButtonText: "OK",
                            });
                        }
                    });
                }
            });
        });
    });
</script>