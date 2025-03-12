@extends('resturant.includes.layout')

@section('content')
<style>
    .card {
        border-radius: 15px;
        border: none;
    }

    .card-header {
        background: linear-gradient(45deg, #6c5ce7, #a29bfe);
        color: white;
        border-radius: 15px 15px 0 0;
    }

    .form-control {
        border-radius: 10px 0 0 10px;
    }

    .badge {
        padding: 0.5em 1em;
        border-radius: 10px;
    }

    .bg-success {
        background: linear-gradient(45deg, #00b894, #55efc4);
    }

    .bg-danger {
        background: linear-gradient(45deg, #ff7675, #d63031);
    }

    .btn-custom {
        background-color: #b22222;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-custom:hover {
        background-color: #8b1a1a;
        transform: translateY(-2px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    .btn-custom:active {
        background-color: #6b1515;
        transform: translateY(0);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-custom:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(178, 34, 34, 0.3);
    }

    input {
        border: 2px solid #000;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        outline: none;
    }
</style>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">プロモーションコード管理</h2>

     
        <div class="input-group mb-3">
            <input type="text" id="promoCode" class="form-control" placeholder="プロモーションコードを入力">
            <button id="searchPromoBtn" class="button -md -dark-1 bg-red h-50 text-white mt-30">検索</button>
        </div>


        <div id="promoData" class="card p-4 mt-3 shadow-sm" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>コード:</strong> <span id="promoCodeDisplay"></span></p>
                    <p><strong>有効期限:</strong> <span id="expiresAt"></span></p>
                    <p><strong>ステータス:</strong> <span id="status" class="badge"></span></p>
                </div>
                <div class="col-md-6">
                    <h4>ユーザー詳細</h4>
                    <p><strong>名前:</strong> <span id="userName"></span></p>
                    <p><strong>メール:</strong> <span id="userEmail"></span></p>
                    <p><strong>住所:</strong> <span id="userAddress"></span></p>
                    <p><strong>郵便番号:</strong> <span id="userPostalCode"></span></p>
                    <p><strong>電話番号:</strong> <span id="userPhone"></span></p>
                </div>
            </div>
            <button id="updatePromoBtn" class="btn btn-custom mt-3">プロモーションコードを使用</button>
        </div>
    </div>
    <div style="padding: 101px;"></div>
</div>

@endsection


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchBtn = document.getElementById('searchPromoBtn');
        const updateBtn = document.getElementById('updatePromoBtn');
        const promoDataSection = document.getElementById('promoData');

        searchBtn.addEventListener('click', async function() {
            const promoCode = document.getElementById('promoCode').value.trim();

            if (!promoCode) {
                Swal.fire('エラー', 'プロモーションコードを入力してください', 'error');
                return;
            }

            try {
                const response = await fetch("{{ locale_route('promo.search') }}", {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        code: promoCode
                    })
                });

                const result = await response.json();

                if (result.success) {
                    const promoData = result.data;

             
                    document.getElementById('promoCodeDisplay').innerText = promoData.promotion_code;
                    document.getElementById('expiresAt').innerText = promoData.expires_at;
                    document.getElementById('status').innerText = promoData.status === "1" ? '使用済み' : '未使用';
                    document.getElementById('status').className = promoData.status === "1" ? 'badge bg-success' : 'badge bg-danger';
                    document.getElementById('userName').innerText = `${promoData.user.first_name} ${promoData.user.last_name}`;
                    document.getElementById('userEmail').innerText = promoData.user.email;
                    document.getElementById('userAddress').innerText = promoData.user.address;
                    document.getElementById('userPostalCode').innerText = promoData.user.postal_code;
                    document.getElementById('userPhone').innerText = promoData.user.phone;

                    promoDataSection.style.display = 'block';
                } else {
                    Swal.fire('エラー', 'プロモーションコードが見つかりません', 'error');
                    promoDataSection.style.display = 'none';
                }
            } catch (error) {
                Swal.fire('エラー', 'プロモーションの取得中にエラーが発生しました', 'error');
            }
        });

        updateBtn.addEventListener('click', async function() {
            const promoCode = document.getElementById('promoCodeDisplay').innerText;

            if (!promoCode) {
                Swal.fire('エラー', '更新するプロモーションが選択されていません', 'error');
                return;
            }

       
            Swal.fire({
                title: '確認',
                text: 'このプロモーションのステータスを更新しますか？',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#b22222',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'はい、更新します',
                cancelButtonText: 'キャンセル'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    try {
                        const response = await fetch("{{ route('update.promo') }}", {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                code: promoCode
                            })
                        });

                        const result = await response.json();

                        if (result.success) {
                            Swal.fire('更新完了', 'プロモーションが正常に更新されました', 'success');
                            searchBtn.click();
                        } else {
                            Swal.fire('エラー', 'プロモーションの更新に失敗しました', 'error');
                        }
                    } catch (error) {
                        Swal.fire('エラー', 'プロモーションの更新中にエラーが発生しました', 'error');
                    }
                }
            });
        });
    });
</script>
