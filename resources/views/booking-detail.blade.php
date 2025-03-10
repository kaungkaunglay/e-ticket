@extends('includes.layout')

@section('contents')
<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    padding: 20px;
    margin: 0;
}

.container {
    max-width: 800px;
    margin: auto;
}

/* Header Section */
.py-10 {
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: white;
    padding: 20px 0;
    text-align: center;
    border-radius: 10px;
}

/* Card Styling */
.card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

h2 {
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    color: #444;
}

h3 {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 10px;
    color: #555;
}

/* Form Styling */
form {
    margin-top: 15px;
}

.form-label {
    font-weight: 500;
    color: #555;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    transition: 0.3s;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.3);
}

textarea.form-control {
    resize: none;
}

/* Button Styling */
.btn-primary {
    background: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
    width: 100%;
}

.btn-primary:hover {
    background: #0056b3;
}


@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
}

</style>
<section class="py-10 d-flex items-center bg-light-2">
    <div class="container">
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                    <div class="col-auto">
                        <div class="" style="color: white;">Home > Booking Detail</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
    <h2 class="text-30 fw-600">Booking Details</h2>

    <div class="card p-4">
        <h3>Please Confirm Restaurant Information</h3>
        <p><strong>Name:</strong> {{ $restaurant->name }}</p>
        <p><strong>Address:</strong> {{ $restaurant->address }}</p>
        <p><strong>Price Range:</strong> ¥{{ number_format($restaurant->price_range) }}</p>

        <p><strong>Description:</strong> {{ $restaurant->description }}</p>

        <h3 class="mt-3">User Information</h3>
        @if($user)
            <p><strong>Name:</strong> {{ $user->first_name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>

         
            <form action="{{ route('booking.save') }}" method="POST">
                @csrf
                <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">

                                <div class="mb-3">
                    <label for="select_date" class="form-label">Select Date and Time</label>
                    <input type="datetime-local" class="form-control" name="select_date" 
                        value="{{ date('Y-m-d\TH:i') }}" required>
                </div>

                <div class="mb-3">
                    <label for="note" class="form-label">Note (Optional)</label>
                    <textarea class="form-control" name="note" rows="3"></textarea>
                </div>

                <button type="submit" class="button -md -dark-1 bg-red h-50 text-white mt-30">Book Now</button>
            </form>

        @else
            <p>Please <a href="{{ route('login') }}">login</a> to proceed with booking.</p>
        @endif
    </div>
</div>
@endsection
