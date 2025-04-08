@extends('includes.layout')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css" rel="stylesheet">
<style>
    /* Minimal custom CSS for specific adjustments */
    .header-bar {
        background-color: #dc3545; /* Bootstrap's danger color to match #B22222 */
        color: white;
        padding: 10px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
    }
</style>
@endsection

@section('contents')
<div class="container-fluid p-0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Header Bar -->
    <div class="header-bar">
        ユーザープロファイル
    </div>

    <!-- Personal Information Section -->
    <div class="container mt-3">
        <div class="card shadow-sm p-3">
            <!-- Profile Display Mode (Using Table) -->
            <div id="profile-view">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row" class="text-muted">名</th>
                            <td id="first-name-text">{{ $user->first_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-muted">姓</th>
                            <td id="last-name-text">{{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-muted">メール</th>
                            <td id="email-text">{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-muted">電話</th>
                            <td id="phone-text">{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-muted">住所</th>
                            <td id="address-text">{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-muted">郵便番号</th>
                            <td id="postal-code-text">{{ $user->postal_code }}</td>
                        </tr>
                    </tbody>
                </table>
                <button id="edit-btn" class="btn btn-danger w-100">プロフィールを編集</button>
            </div>

            <!-- Profile Edit Mode -->
            <form id="profile-form" class="d-none">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">

                <div class="mb-3">
                    <label for="first-name" class="form-label">名:</label>
                    <input type="text" id="first-name" name="first_name" class="form-control" value="{{ $user->first_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">姓:</label>
                    <input type="text" id="last-name" name="last_name" class="form-control" value="{{ $user->last_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">メール:</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">電話:</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $user->phone }}" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">住所:</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $user->address }}" required>
                </div>
                <div class="mb-3">
                    <label for="postal-code" class="form-label">郵便番号:</label>
                    <input type="text" id="postal-code" name="postal_code" class="form-control" value="{{ $user->postal_code }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success w-50 me-2">変更を保存</button>
                    <button type="button" id="cancel-btn" class="btn btn-secondary w-50">キャンセル</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
<script>
    const editBtn = document.getElementById("edit-btn");
    const cancelBtn = document.getElementById("cancel-btn");
    const profileView = document.getElementById("profile-view");
    const profileForm = document.getElementById("profile-form");

    editBtn.addEventListener("click", function() {
        profileView.classList.add("d-none");
        profileForm.classList.remove("d-none");
    });

    cancelBtn.addEventListener("click", function() {
        profileView.classList.remove("d-none");
        profileForm.classList.add("d-none");
    });

    profileForm.addEventListener("submit", async function(event) {
        event.preventDefault();
        const formData = {
            id: document.querySelector('input[name="id"]').value,
            first_name: document.getElementById("first-name").value,
            last_name: document.getElementById("last-name").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            address: document.getElementById("address").value,
            postal_code: document.getElementById("postal-code").value,
        };

        try {
            const response = await fetch("{{ route('user.profileupdate') }}", {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                },
                body: JSON.stringify(formData),
            });

            const data = await response.json();

            if (response.ok) {
                document.getElementById("first-name-text").innerText = formData.first_name;
                document.getElementById("last-name-text").innerText = formData.last_name;
                document.getElementById("email-text").innerText = formData.email;
                document.getElementById("phone-text").innerText = formData.phone;
                document.getElementById("address-text").innerText = formData.address;
                document.getElementById("postal-code-text").innerText = formData.postal_code;

                profileView.classList.remove("d-none");
                profileForm.classList.add("d-none");

                Swal.fire({
                    title: '成功しました！',
                    text: data.message || "プロフィールが正常に更新されました！",
                    icon: 'success',
                    confirmButtonText: 'OK',
                }).then(() => {
                    document.documentElement.lang = "ja";
                    location.reload();
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: data.message || "Error updating profile",
                    icon: 'error',
                    confirmButtonText: 'Try Again',
                });
            }
        } catch (error) {
            console.error("Error:", error);
            Swal.fire({
                title: 'Oops!',
                text: "An error occurred while updating the profile.",
                icon: 'error',
                confirmButtonText: 'OK',
            });
        }
    });
</script>
@endsection