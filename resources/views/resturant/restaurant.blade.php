@extends('resturant.includes.layout')
@section('content')

<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">{{ isset($restaurant) ? translate('edit') : translate('add') }} {{translate('restaurants')}}</h1>
    </div>
</div>

@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach

<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <form action="{{ isset($restaurant) && $restaurant->id ? route('resturant.update', $restaurant->id) : route('resturant.store') }}" method="POST" enctype="multipart/form-data" class="contact-form">
        @csrf
        @if(isset($restaurant) && $restaurant->id)
        @method('PUT')
        @endif

        <div class="row x-gap-20 y-gap-20">
            <!-- Category -->
            <div class="col-12">
                <div class="form-input">
                    <select name="category_id" class="form-control" required>
                        <option value="">{{translate('select_category')}}</option>
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
                <label class="lh-1 text-16 text-light-1">{{translate('restaurant_name')}}</label>
                <div class="form-input">
                    <input type="text" name="name" value="{{ old('name', $restaurant->name ?? '') }}" required>

                </div>
            </div>

            <!-- Logo & Cover Image -->
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1">{{translate('logo')}}</label>
                <input type="file" name="logo" class="form-control" {{ isset($restaurant) ? '' : 'required' }}>
                @if(isset($restaurant) && $restaurant->logo)
                <img src="{{ asset($restaurant->logo) }}" alt="Logo" width="100" class="mt-2">
                @endif
            </div>
            <!-- <div class="col-12">
                <label class="lh-1 text-16 text-light-1">{{translate('cover_image')}}</label>
                <input type="file" name="cover_image" class="form-control">
                @if(isset($restaurant) && $restaurant->cover_image)
                <img src="{{ asset($restaurant->cover_image) }}" alt="Cover Image" width="200" class="mt-2">
                @endif
            </div> -->
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1">{{translate('multiple_image')}}</label>
                <input type="file" name="multi_images[]" class="form-control" id="multi_images" multiple>
                <div id="image-preview" class="mt-2">
                    @if($restaurant->multi_images)
                    @php
                    $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images) : $restaurant->multi_images;
                    @endphp
                    @foreach($images as $image)
                    <div class="image-preview-item">
                        <img src="{{ asset($image) }}" alt="Multi Image" width="100" class="mr-2 mt-2">
                        <span class="remove-image" onclick="removeImage(this)">×</span>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- Description, Address, City, Zip Code -->
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('description')}}</label>
                    <div class="form-input">
                        <textarea name="description" rows="5" required>{{ old('description', $restaurant->description ?? '') }}</textarea>

                    </div>
                </div>
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('address')}}</label>
                    <div class="form-input">
                        <input type="text" name="address" value="{{ old('address', $restaurant->address ?? '') }}" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <label class="lh-1 text-16 text-light-1">{{translate('city')}}</label>
                    <div class="form-input">
                        <input type="text" name="city" value="{{ old('city', $restaurant->city ?? '') }}" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <label class="lh-1 text-16 text-light-1">{{translate('zip_code')}}</label>
                    <div class="form-input">
                        <input type="text" name="zip_code" value="{{ old('zip_code', $restaurant->zip_code ?? '') }}" required>

                    </div>
                </div>

                <!-- Latitude & Longitude -->
                <div class="col-md-6">
                    <label class="lh-1 text-16 text-light-1">{{translate('latitude')}}</label>
                    <div class="form-input">
                        <input type="text" name="latitude" value="{{ old('latitude', $restaurant->latitude ?? '') }}">

                    </div>
                </div>
                <div class="col-md-6">
                    <label class="lh-1 text-16 text-light-1">{{translate('longitude')}}</label>
                    <div class="form-input">
                        <input type="text" name="longitude" value="{{ old('longitude', $restaurant->longitude ?? '') }}">

                    </div>
                </div>

                <!-- Phone, Email, Website URL -->
                <div class="col-md-4">
                    <label class="lh-1 text-16 text-light-1">{{translate('phone')}}</label>
                    <div class="form-input">
                        <input type="text" name="phone_number" value="{{ old('phone_number', $restaurant->phone_number ?? '') }}" required>

                    </div>
                </div>
                <div class="col-md-4">
                    <label class="lh-1 text-16 text-light-1">{{translate('email')}}</label>
                    <div class="form-input">
                        <input type="email" name="email" value="{{ old('email', $restaurant->email ?? '') }}" required>

                    </div>
                </div>
                <div class="col-md-4">
                    <label class="lh-1 text-16 text-light-1">{{translate('website_url')}}</label>
                    <div class="form-input">
                        <input type="text" name="website_url" value="{{ old('website_url', $restaurant->website_url ?? '') }}">

                    </div>
                </div>

                <!-- Operating Hours, Closed Days, Price Range -->
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('operating_hours')}}</label>
                    <div class="form-input">
                        <input type="text" name="operating_hours" value="{{ old('operating_hours', $restaurant->operating_hours ?? '') }}" required>

                    </div>
                </div>

             


                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('closed_day')}}</label>
                    <div class="form-input">
                        <input type="text" name="closed_days" value="{{ old('closed_days', $restaurant->closed_days ?? '') }}">

                    </div>
                </div>
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('price_range')}}</label>
                    <div class="form-input">
                        <input type="text" name="price_range" value="{{ old('price_range', $restaurant->price_range ?? '') }}">

                    </div>
                </div>
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('Discount')}}</label>
                    <div class="form-input">
                        <input type="text" name="discount" value="{{ old('discount', $restaurant->discount ?? '') }}" >

                    </div>
                </div>
                <!-- Additional Features -->
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" name="wifi_availability" value="1" {{ old('wifi_availability', $restaurant->wifi_availability ?? false) ? 'checked' : '' }}> {{translate('wifi_available')}}
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="parking_availability" value="1" {{ old('parking_availability', $restaurant->parking_availability ?? false) ? 'checked' : '' }}> {{translate('parking_available')}} 
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="outdoor_seating" value="1" {{ old('outdoor_seating', $restaurant->outdoor_seating ?? false) ? 'checked' : '' }}> {{translate('outdoor_seating')}}
                    </div>
                </div>

                <!-- Available -->
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('available')}}</label>
                    <div class="form-input">
                        <input type="text" name="available" value="{{ old('available', $restaurant->available ?? '') }}" require>

                    </div>
                </div>

                <!-- Status -->
                <div class="col-12">
                    <label class="lh-1 text-16 text-light-1">{{translate('status')}}</label>
                    <div class="form-input">

                        <select name="status" class="form-control" required>
                            <option value="0" {{ $restaurant->status == 0 ? 'selected' : '' }}>{{translate('not_approve')}}</option>
                            <option value="1" {{ $restaurant->status == 1 ? 'selected' : '' }}>{{translate('approve')}}</option>
                        </select>
                    </div>
                </div>

                <div class="d-inline-block pt-30">
                    <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">{{translate('save_changes')}}</button>
                </div>
            </div>
    </form>
</div>

@endsection

<style>
    .form-input {
        margin-bottom: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .error-message {
        font-size: 0.9rem;
        margin-top: 0.25rem;
    }

    .image-preview-item {
        position: relative;
        display: inline-block;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .remove-image {
        position: absolute;
        top: 0;
        right: 0;
        background: red;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        cursor: pointer;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const multiImagesInput = document.getElementById('multi_images');
        const imagePreview = document.getElementById('image-preview');

        // Handle file input change
        multiImagesInput.addEventListener('change', function(e) {
            const files = e.target.files;
            for (const file of files) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.width = 100;
                    img.classList.add('mr-2', 'mt-2');

                    const removeButton = document.createElement('span');
                    removeButton.textContent = '×';
                    removeButton.classList.add('remove-image');
                    removeButton.addEventListener('click', function() {
                        imagePreview.removeChild(div);
                    });

                    const div = document.createElement('div');
                    div.classList.add('image-preview-item');
                    div.appendChild(img);
                    div.appendChild(removeButton);

                    imagePreview.appendChild(div);
                };
                reader.readAsDataURL(file);
            }
        });
    });

    // Function to remove existing images
    function removeImage(element) {
        element.parentElement.remove();
    }
</script>