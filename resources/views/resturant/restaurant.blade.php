@extends('resturant.includes.layout')
@section('content')

<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">{{ isset($restaurant) ? 'Edit' : 'Add' }} Restaurant</h1>
    </div>
</div>

@foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
@endforeach

<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <form action="{{ isset($restaurant) ? route('resturant.update', $restaurant->id) : route('resturant.store') }}" method="POST" enctype="multipart/form-data" class="contact-form">
        @csrf
        @if(isset($restaurant))
        @method('PUT')
        @endif

        <div class="row x-gap-20 y-gap-20">
            <!-- Category -->
            <div class="col-12">
                <div class="form-input">
                    <select name="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ isset($restaurant) && $restaurant->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Name -->
            <div class="col-12">
                <div class="form-input">
                    <input type="text" name="name" value="{{ old('name', $restaurant->name ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">Restaurant Name</label>
                </div>
            </div>

            <!-- Logo & Cover Image -->
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1">Logo</label>
                <input type="file" name="logo" class="form-control" required>
                @if(isset($restaurant) && $restaurant->logo)
                <img src="{{ asset('storage/' . $restaurant->logo) }}" alt="Logo" width="100">
                @endif
            </div>
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1">Cover Image</label>
                <input type="file" name="cover_image" class="form-control">
                @if(isset($restaurant) && $restaurant->cover_image)
                <img src="{{ asset('storage/' . $restaurant->cover_image) }}" alt="Cover Image" width="200">
                @endif
            </div>

            <!-- Description, Address, City, Zip Code -->
            <div class="col-12">
                <div class="form-input">
                    <textarea name="description" rows="5" required>{{ old('description', $restaurant->description ?? '') }}</textarea>
                    <label class="lh-1 text-16 text-light-1">Description</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-input">
                    <input type="text" name="address" value="{{ old('address', $restaurant->address ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">Address</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-input">
                    <input type="text" name="city" value="{{ old('city', $restaurant->city ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">City</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-input">
                    <input type="text" name="zip_code" value="{{ old('zip_code', $restaurant->zip_code ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">Zip Code</label>
                </div>
            </div>

            <!-- Latitude & Longitude -->
            <div class="col-md-6">
                <div class="form-input">
                    <input type="text" name="latitude" value="{{ old('latitude', $restaurant->latitude ?? '') }}">
                    <label class="lh-1 text-16 text-light-1">Latitude</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-input">
                    <input type="text" name="longitude" value="{{ old('longitude', $restaurant->longitude ?? '') }}">
                    <label class="lh-1 text-16 text-light-1">Longitude</label>
                </div>
            </div>

            <!-- Phone, Email, Website URL -->
            <div class="col-md-4">
                <div class="form-input">
                    <input type="text" name="phone_number" value="{{ old('phone_number', $restaurant->phone_number ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">Phone Number</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-input">
                    <input type="email" name="email" value="{{ old('email', $restaurant->email ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">Email</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-input">
                    <input type="text" name="website_url" value="{{ old('website_url', $restaurant->website_url ?? '') }}">
                    <label class="lh-1 text-16 text-light-1">Website URL</label>
                </div>
            </div>

            <!-- Operating Hours, Closed Days, Price Range -->
            <div class="col-12">
                <div class="form-input">
                    <input type="text" name="operating_hours" value="{{ old('operating_hours', $restaurant->operating_hours ?? '') }}" required>
                    <label class="lh-1 text-16 text-light-1">Operating Hours</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-input">
                    <input type="text" name="closed_days" value="{{ old('closed_days', $restaurant->closed_days ?? '') }}">
                    <label class="lh-1 text-16 text-light-1">Closed Days</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-input">
                    <input type="text" name="price_range" value="{{ old('price_range', $restaurant->price_range ?? '') }}">
                    <label class="lh-1 text-16 text-light-1">Price Range</label>
                </div>
            </div>

            <!-- Additional Features -->
            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" name="wifi_availability" value="1" {{ old('wifi_availability', $restaurant->wifi_availability ?? false) ? 'checked' : '' }}> WiFi Available
                </div>
                <div class="form-check">
                    <input type="checkbox" name="parking_availability" value="1" {{ old('parking_availability', $restaurant->parking_availability ?? false) ? 'checked' : '' }}> Parking Available
                </div>
                <div class="form-check">
                    <input type="checkbox" name="outdoor_seating" value="1" {{ old('outdoor_seating', $restaurant->outdoor_seating ?? false) ? 'checked' : '' }}> Outdoor Seating
                </div>
            </div>

            <div class="d-inline-block pt-30">
                <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">{{ isset($restaurant) ? 'Update' : 'Add' }} Restaurant</button>
            </div>
        </div>
    </form>
</div>

@endsection