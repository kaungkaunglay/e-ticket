<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    /* .container {
        max-width: 600px;
        margin: 40px auto;
        text-align: left; 
    } */

    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1529px !important;
        }
    }

    .profile-field {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 6px;
        background: #f8fafc;
    }

    .profile-field strong {
        color: #4b5563;
        font-weight: 600;
        margin-right: 10px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        outline: none;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        margin-right: 10px;
    }

    .btn-primary {
        background: #3b82f6;
        color: white;
    }

    .btn-primary:hover {
        background: #2563eb;
    }

    .btn-success {
        background: #10b981;
        color: white;
    }

    .btn-success:hover {
        background: #059669;
    }

    .btn-secondary {
        background: #6b7280;
        color: white;
    }

    .btn-secondary:hover {
        background: #4b5563;
    }

    .d-none {
        display: none;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        color: #374151;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .tabs__pane {
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .profile-info {
        margin-top: 20px;
    }
</style>
</head>

<body>
    <div class="container mt-4">
        <div class="tabs__pane -tab-item-1 is-tab-el-active">
            <div class="profile-info">
                <div class="card p-4 shadow-sm">
                    <h2 class="mb-3">ユーザープロファイル</h2>

                    <!-- Profile Display Mode -->
                    <div id="profile-view">
                        <div class="profile-field">
                            <strong>名:</strong>
                            <span id="first-name-text">{{ $user->first_name }}</span>
                        </div>
                        <div class="profile-field">
                            <strong>姓:</strong>
                            <span id="last-name-text">{{ $user->last_name }}</span>
                        </div>
                        <div class="profile-field">
                            <strong>メール:</strong>
                            <span id="email-text">{{ $user->email }}</span>
                        </div>
                        <div class="profile-field">
                            <strong>電話:</strong>
                            <span id="phone-text">{{ $user->phone }}</span>
                        </div>
                        <div class="profile-field">
                            <strong>住所:</strong>
                            <span id="address-text">{{ $user->address }}</span>
                        </div>
                        <div class="profile-field">
                            <strong>郵便番号:</strong>
                            <span id="postal-code-text">{{ $user->postal_code }}</span>
                        </div>
                        <button id="edit-btn" class="btn btn-primary">プロフィールを編集</button>
                    </div>

                    <!-- Profile Edit Mode -->
                    <form id="profile-form" class="d-none">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">

                        <div class="form-group">
                            <label>名:</label>
                            <input type="text" id="first-name" name="first_name"
                                class="form-control" value="{{ $user->first_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>姓:</label>
                            <input type="text" id="last-name" name="last_name"
                                class="form-control" value="{{ $user->last_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>メール:</label>
                            <input type="email" id="email" name="email"
                                class="form-control" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>電話:</label>
                            <input type="text" id="phone" name="phone"
                                class="form-control" value="{{ $user->phone }}" required>
                        </div>
                        <div class="form-group">
                            <label>住所:</label>
                            <input type="text" id="address" name="address"
                                class="form-control" value="{{ $user->address }}" required>
                        </div>
                        <div class="form-group">
                            <label>郵便番号:</label>
                            <input type="text" id="postal-code" name="postal_code"
                                class="form-control" value="{{ $user->postal_code }}" required>
                        </div>

                        <button type="submit" class="btn btn-success">変更を保存</button>
                        <button type="button" id="cancel-btn" class="btn btn-secondary">キャンセル</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css" rel="stylesheet">
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
</body>

</html>