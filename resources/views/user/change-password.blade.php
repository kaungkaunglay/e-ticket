<style>
    /* Global Styles */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    /* Profile Info Container */
    .profile-info {
        padding: 30px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        max-width: 600px;
        margin: 0 auto;
        margin-top: 50px;
    }

    h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 25px;
        text-align: center;
        font-weight: 600;
    }

    /* Form Group */
    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #555;
    }

    .form-control {
        width: 100%;
        height: 45px;
        padding: 10px 15px;
        font-size: 16px;
        color: #333;
        background-color: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        outline: none;
    }

    /* Invalid Input Style */
    .form-control.is-invalid {
        border-color: #dc3545;
        background-color: #ffe6e6;
    }

    .form-control.is-invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
    }

    .invalid-feedback {
        display: none;
        margin-top: 5px;
        font-size: 13px;
        color: #dc3545;
    }

    .form-control.is-invalid ~ .invalid-feedback {
        display: block;
    }

    /* Button Styling */
    .button {
        display: inline-flex;
        align-items: center;
        height: 50px;
        padding: 0 30px;
        background-color: #3554D1;
        color: white;
        border: none;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
        justify-content: center;
    }

    .button:hover {
        background-color: #2a43a7;
    }

    .button:focus {
        outline: none;
    }

    /* Profile Actions */
    .profile-actions {
        margin-top: 30px;
        text-align: center;
    }

    /* Input for Customization */
    input {
        border: 2px solid #afa9a9 !important;
    }

    /* Media Query for Mobile Devices */
    @media (max-width: 768px) {
        .profile-info {
            padding: 20px;
        }

        .form-control {
            font-size: 14px;
        }

        .button {
            font-size: 14px;
            padding: 0 20px;
        }
    }
</style>

<div class="tabs__pane -tab-item-3">
    <div class="col-xl-15">
        <div class="profile-info">
            <h2>パスワードを変更</h2>
            <form id="password-change-form">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                
                <div class="form-group">
                    <label for="old_password">古いパスワード</label>
                    <input type="password" 
                           name="old_password" 
                           id="old_password" 
                           class="form-control @error('old_password') is-invalid @enderror" 
                           required>
                    @error('old_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password">新しいパスワード</label>
                    <input type="password" 
                           name="new_password" 
                           id="new_password" 
                           class="form-control @error('new_password') is-invalid @enderror" 
                           required>
                    @error('new_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">新しいパスワードを確認</label>
                    <input type="password" 
                           name="new_password_confirmation" 
                           id="new_password_confirmation" 
                           class="form-control @error('new_password_confirmation') is-invalid @enderror" 
                           required>
                    @error('new_password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="profile-actions">
                    <button type="submit" class="button">
                        パスワードを変更
                        <div class="icon-arrow-top-right ml-15"></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.js"></script>
<script>
   document.getElementById('password-change-form').addEventListener('submit', async function(event) {
    event.preventDefault(); 
    const formData = {
        id: document.querySelector('input[name="id"]').value,
        old_password: document.getElementById('old_password').value,
        new_password: document.getElementById('new_password').value,
        new_password_confirmation: document.getElementById('new_password_confirmation').value,
    };

    console.log('Form Data:', formData); 

    try {
        const response = await fetch("{{ route('user.password') }}", {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify(formData),
        });

        console.log('Response Status:', response.status); 
        console.log('Response Headers:', response.headers); 

        
        const contentType = response.headers.get('content-type');
        if (!contentType || !contentType.includes('application/json')) {
            const text = await response.text(); 
            console.error('Expected JSON but got:', text); 
            throw new Error('Server returned non-JSON response');
        }

        const data = await response.json();
        console.log('Response Data:', data); 

        if (response.ok) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message || 'Password changed successfully!',
            });

            document.getElementById('password-change-form').reset();
        } else {
            let errorMessage = data.message || 'Failed to change password. Please try again.';            
            if (data.errors) {
                errorMessage = Object.values(data.errors).join('<br>');
            }

            Swal.fire({
                icon: 'error',
                title: 'Error!',
                html: errorMessage, 
            });
        }
    } catch (error) {
        console.error('Error:', error); 
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'An unexpected error occurred. Please try again.',
        });
    }
});
</script>
