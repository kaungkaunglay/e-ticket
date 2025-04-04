@extends('resturant.includes.layout')
@section('content')
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

    .buttoncss {
        background-color: #950000;
        border: none;
        color: white;
        padding: 0px;
    }

    .movespace {
        padding: 18px;
        color: red;
    }
    .custom-file-upload {
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 5px;
}

.hidden-input {
    display: none; /* Hide default file input */
}

.custom-label {
    background-color: #007bff;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
}

.custom-label:hover {
    background-color: #0056b3;
}

.file-name {
    font-size: 14px;
    color: #555;
}
.custom-file-upload {
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 5px;
}

.hidden-input {
    display: none; /* Hide default input */
}

.custom-label {
    background-color: #007bff;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    display: inline-block;
}

.custom-label:hover {
    background-color: #0056b3;
}

.file-name {
    font-size: 14px;
    color: #555;
}

.image-preview-item {
    display: inline-block;
    position: relative;
    margin-right: 10px;
}

.image-preview-item img {
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.remove-image {
    position: absolute;
    top: -5px;
    right: -5px;
    background: red;
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-weight: bold;
}

</style>
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

            <!-- Name -->
            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('restaurant_name')}}</label>
                <div class="form-input">
                    <input type="text" name="name" value="{{ old('name', $restaurant->name ?? '') }}" required>

                </div>
            </div>
            <!-- Category -->
            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('restaurant_type')}}</label>
                <div class="form-input">
                    <select name="category_id" class="form-control">
                        <option value="">{{translate('select_category')}}</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ isset($restaurant) && $restaurant->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('menu')}}</label>
                <div class="form-input" style="gap: 10px; align-items: center; justify-content: space-between;">

                    <select id="menu-select" class="form-control">
                        <option value="">{{translate('select_a_menu')}}</option>
                        @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->menu }}</option>
                        @endforeach
                    </select>

                    <button type="button" id="add-menu" class="bg-red button h-50 px-24 -dark-1 bg-blue-1 text-white">
                        {{translate('add')}}
                    </button>
                </div>

                <div id="selected-menus" class="mt-20">
                    <ul id="selected-menus-list" class="list-group"></ul>
                </div>

                <input type="hidden" name="menu" id="selected-menu-ids">
            </div>



            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{ translate('closed_days') }}</label>
                <div class="form-input" style="gap: 10px; align-items: center; justify-content: space-between;">
                    <select id="week-select" class="form-control">
                        <option value="">{{translate('select_a_week')}}</option>
                        @foreach($weeks as $week)
                        <option value="{{ $week->id }}">{{ $week->day }}</option>
                        @endforeach
                    </select>
                    <button type="button" id="add-week" class="bg-red button h-50 px-24 -dark-1 bg-blue-1 text-white">{{translate('add')}}</button>
                </div>
                <div id="selected-weeks" class="mt-20">
                    <ul id="selected-weeks-list" class="list-group"></ul>
                </div>
                <input type="hidden" name="closed_days" id="selected-week-ids">
            </div>






            <!-- Logo & Cover Image -->
            <div class="col-md-6">
    <label class="lh-1 text-16 text-light-1 mb-10">{{ translate('logo') }}</label>
    
    <div class="custom-file-upload">
        <input type="file" name="logo" id="fileInput" class="hidden-input" {{ isset($restaurant) ? '' : 'required' }} onchange="updateFileName()">
        <label for="fileInput" class="custom-label">📂 ファイルを選択してください</label>
        <span id="fileName" class="file-name">選択されたファイル: なし</span>
    </div>

    @if(isset($restaurant) && $restaurant->logo)
        <img src="{{ asset($restaurant->logo) }}" alt="Logo" width="100" class="mt-2">
    @endif
</div>


            <!-- <div class="col-12">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('cover_image')}}</label>
                <input type="file" name="cover_image" class="form-control">
                @if(isset($restaurant) && $restaurant->cover_image)
                <img src="{{ asset($restaurant->cover_image) }}" alt="Cover Image" width="200" class="mt-2">
                @endif
            </div> -->
            <div class="col-md-6">
    <label class="lh-1 text-16 text-light-1 mb-10">{{ translate('multiple_image') }}</label>

    <!-- Custom File Input -->
    <div class="custom-file-upload">
        <input type="file" name="multi_images[]" class="hidden-input" id="multi_images" multiple onchange="previewImages()">
        <label for="multi_images" class="custom-label">📂 複数の画像を選択</label>
        <span id="fileCount" class="file-name">選択された画像: 0</span>
    </div>

    <!-- Image Preview Section -->
    <div id="image-preview" class="mt-2">
        @if(isset($restaurant) && $restaurant->multi_images)
            @php
                $images = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images, true) : $restaurant->multi_images;
            @endphp
            @foreach($images as $image)
                <div class="image-preview-item">
                    <img src="{{ asset($image) }}" alt="Multi Image" width="100" class="mr-2 mt-2">
                    <span class="remove-image" onclick="removeImage(this, '{{ $image }}')">×</span>
                </div>
            @endforeach
        @endif
    </div>
</div>

            <!-- Description, Address, City, Zip Code -->
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('description')}}</label>
                <div class="form-input">
                    <textarea name="description" rows="5" required>{{ old('description', $restaurant->description ?? '') }}</textarea>

                </div>
            </div>
            <div class="col-md-2">
                <label class="lh-1 text-16 text-light-1 mb-10">住所</label>
                <div class="form-input">
                    <input type="text" name="address" value="{{ old('address', $restaurant->address ?? '') }}" required>

                </div>
            </div>
            <div class="col-md-2">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('都道府県')}}</label>
                <div class="form-input">
                    <input type="text" name="city" value="{{ old('city', $restaurant->city ?? '') }}" required>

                </div>
            </div>
            <div class="col-md-2">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('zip_code')}}</label>
                <div class="form-input">
                    <input type="text" name="zip_code" maxlength="7" value="{{ old('zip_code', $restaurant->zip_code ?? '') }}" required>

                </div>
            </div>

            <!-- Latitude & Longitude -->
            <!-- <div class="col-md-6">
                    <label class="lh-1 text-16 text-light-1 mb-10">{{translate('latitude')}}</label>
                    <div class="form-input">
                        <input type="text" name="latitude" value="{{ old('latitude', $restaurant->latitude ?? '') }}">

                    </div>
                </div> -->
            <div class="col-md-2">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('google_map')}}</label>
                <div class="form-input">
                    <input type="text" name="google_map" value="{{ old('google_map', $restaurant->google_map ?? '') }}">

                </div>
            </div>


            <div class="col-md-2">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('phone')}}</label>
                <div class="form-input">
                    <input type="text" name="phone_number" maxlength="11" value="{{ old('phone_number', $restaurant->phone_number ?? '') }}" required>

                </div>
            </div>
            <div class="col-md-2">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('email')}}</label>
                <div class="form-input">
                    <input type="email" name="email" value="{{ old('email', $restaurant->email ?? '') }}" required>

                </div>
            </div>
            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('website_url')}}</label>
                <div class="form-input">
                    <input type="text" name="website_url" value="{{ old('website_url', $restaurant->website_url ?? '') }}">

                </div>
            </div>


            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('operating_hours')}}</label>
                <div class="form-input">
                    <input type="text" name="operating_hours" value="{{ old('operating_hours', $restaurant->operating_hours ?? '') }}" required>

                </div>
            </div>



            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('price_range')}}</label>
                <div class="form-input">
                    <input type="text" name="price_range" value="{{ old('price_range', $restaurant->price_range ?? '') }}">

                </div>
            </div>
            <div class="col-md-3">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('discount')}}</label>
                <div class="form-input">
                    <input type="text" name="discount" value="{{ old('discount', $restaurant->discount ?? 0) }}">
                </div>
            </div>
            <!-- Additional Features -->
            <div class="col-12 mb-20 d-flex align-items-center justify-content-center">
                <div class="form-check col-md-3 text-center">
                    <input type="checkbox" name="wifi_availability" value="1" {{ old('wifi_availability', $restaurant->wifi_availability ?? false) ? 'checked' : '' }}> {{translate('wifi_available')}}
                </div>
                <div class="form-check col-md-3 text-center">
                    <input type="checkbox" name="parking_availability" value="1" {{ old('parking_availability', $restaurant->parking_availability ?? false) ? 'checked' : '' }}> {{translate('parking_available')}}
                </div>
                <div class="form-check col-md-3 text-center">
                    <input type="checkbox" name="outdoor_seating" value="1" {{ old('outdoor_seating', $restaurant->outdoor_seating ?? false) ? 'checked' : '' }}> {{translate('outdoor_seating')}}
                </div>
                <div class="form-check col-md-3 text-center">
                    <input type="checkbox" name="smoking" value="1" {{ old('outdoor_seating', $restaurant->smoking ?? false) ? 'checked' : '' }}> {{translate('smoking')}}
                </div>

            </div>
            <h2 class="text-15">検索用</h2>

            <div class="d-flex" style="gap: 20px;">
                <div data-x-dd-click="searchMenu-loc col-md-6">
                    <h4 class="text-15 fw-500 ls-2 lh-16">都道府県</h4>
                    <div class="text-15 text-light-1 ls-2 lh-16" style="border: 1px solid var(--color-border);">
                        <select id="city" name="city" class="js-search js-dd-focus w-100">
                            <option value="">{{ translate('都道府県を選んでください') }}</option>
                            @foreach($cities as $city)
                            <option value="{{ $city->name }}" {{ $restaurant->city == $city->name ? 'selected' : '' }}>
                                {{ $city->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div data-x-dd-click="searchMenu-loc col-6">
                    <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('市町区村') }}</h4>
                    <div class="text-15 text-light-1 ls-2 lh-16" style="border: 1px solid var(--color-border);">
                        <select id="subTown" name="sub_town" class="js-search js-dd-focus w-100" disabled>
                            <option value="">{{ translate('市町区村を選んでください') }}</option>
                            @isset($restaurant)
                            @if ($restaurant->sub_towns)
                            <option value="{{ $restaurant->sub_towns }}" selected>{{ $restaurant->sub_towns }}</option>
                            @endif
                            @endisset
                        </select>
                    </div>
                </div>
            </div>

            
            <!-- Available -->
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('available')}}</label>
                <div class="form-input">
                    <input type="text" name="available" value="{{ old('available', $restaurant->available ?? '') }}">

                </div>
            </div>

            <!-- Status -->
            <div class="col-12">
                <label class="lh-1 text-16 text-light-1 mb-10">{{translate('status')}}</label>
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
    </form>
</div>

@endsection

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

function updateFileName() {
    const input = document.getElementById('fileInput');
    const fileName = input.files.length > 0 ? input.files[0].name : '選択されたファイル: なし';
    document.getElementById('fileName').textContent = fileName;
}

    function removeImage(element) {
    if (element && element.parentElement) {
        element.parentElement.remove();
    }
}



    document.addEventListener('DOMContentLoaded', function() {
        const multiImagesInput = document.getElementById('multi_images');
        const imagePreview = document.getElementById('image-preview');

        // Initialize Flatpickr for closed days
        flatpickr('#closed_days', {
            noCalendar: false,
            dateFormat: 'Y-m-d',
            defaultDate: '{{ old("closed_days", $restaurant->closed_days ?? "") }}',
            disableMobile: true
        });

        // Image preview functionality
        if (multiImagesInput && imagePreview) {
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
        }

        /** MENU SELECTION **/
        const menuSelect = document.getElementById('menu-select');
        const addMenuButton = document.getElementById('add-menu');
        const selectedMenusList = document.getElementById('selected-menus-list');
        const selectedMenuIdsInput = document.getElementById('selected-menu-ids');
        let selectedMenus = [];

        function updateSelectedMenuIds() {
            if (selectedMenuIdsInput) {
                selectedMenuIdsInput.value = JSON.stringify(selectedMenus);
            }
        }

        function addMenu() {
            const selectedMenuId = menuSelect.value;
            const selectedMenuName = menuSelect.options[menuSelect.selectedIndex].text;
            if (selectedMenuId && !selectedMenus.includes(selectedMenuId)) {
                selectedMenus.push(selectedMenuId);
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item';
                listItem.textContent = selectedMenuName;
                const removeButton = document.createElement('button');
                removeButton.className = 'btn btn-danger btn-sm float-right movespace';
                removeButton.textContent = 'Remove';
                removeButton.onclick = function() {
                    selectedMenus = selectedMenus.filter(id => id !== selectedMenuId);
                    selectedMenusList.removeChild(listItem);
                    updateSelectedMenuIds();
                };
                listItem.appendChild(removeButton);
                selectedMenusList.appendChild(listItem);
                updateSelectedMenuIds();
            }
        }

        if (addMenuButton) {
            addMenuButton.addEventListener('click', addMenu);
        }

        /** WEEK SELECTION **/
        const weekSelect = document.getElementById('week-select');
        const addWeekButton = document.getElementById('add-week');
        const selectedWeeksList = document.getElementById('selected-weeks-list');
        const selectedWeekIdsInput = document.getElementById('selected-week-ids');
        let selectedWeeks = [];

        function updateSelectedWeekIds() {
            if (selectedWeekIdsInput) {
                selectedWeekIdsInput.value = JSON.stringify(selectedWeeks);
            }
        }

        function addWeek() {
            const selectedWeekId = weekSelect.value;
            const selectedWeekName = weekSelect.options[weekSelect.selectedIndex].text;
            if (selectedWeekId && !selectedWeeks.includes(selectedWeekId)) {
                selectedWeeks.push(selectedWeekId);
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item';
                listItem.textContent = selectedWeekName;
                const removeButton = document.createElement('button');
                removeButton.className = 'btn btn-danger btn-sm float-right movespace';
                removeButton.textContent = 'Remove';
                removeButton.onclick = function() {
                    selectedWeeks = selectedWeeks.filter(id => id !== selectedWeekId);
                    selectedWeeksList.removeChild(listItem);
                    updateSelectedWeekIds();
                };
                listItem.appendChild(removeButton);
                selectedWeeksList.appendChild(listItem);
                updateSelectedWeekIds();
            }
        }

        if (addWeekButton) {
            addWeekButton.addEventListener('click', addWeek);
        }


        const initialSelectedWeeks = JSON.parse('{!! json_encode($restaurant->weeks) !!}');
        if (selectedWeeksList && weekSelect) {
            initialSelectedWeeks.forEach(weekId => {
                const weekOption = document.querySelector(`#week-select option[value="${weekId}"]`);
                if (weekOption) {
                    const weekName = weekOption.textContent;
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item';
                    listItem.textContent = weekName;

                    const removeButton = document.createElement('button');
                    removeButton.className = 'btn btn-danger btn-sm float-right movespace';
                    removeButton.innerHTML = '<i class="icon-trash-2 text-16 text-light-1"></i>';
                    removeButton.onclick = function() {
                        selectedWeeksList.removeChild(listItem);
                        selectedWeeks = selectedWeeks.filter(id => id !== weekId);
                        updateSelectedWeekIds();
                    };

                    listItem.appendChild(removeButton);
                    selectedWeeksList.appendChild(listItem);
                }
            });
            selectedWeeks = initialSelectedWeeks;
            updateSelectedWeekIds();
        }

        /** PREPOPULATE SELECTED MENUS **/
        const initialSelectedMenus = JSON.parse('{!! json_encode($restaurant->menu) !!}');
        if (selectedMenusList && menuSelect) {
    initialSelectedMenus.forEach(menuId => {
        const menuName = document.querySelector(`#menu-select option[value="${menuId}"]`).textContent;
        const listItem = document.createElement('li');
        listItem.className = 'list-group-item';
        listItem.textContent = menuName;

        // Create the remove button
        const removeButton = document.createElement('button');
        removeButton.className = 'btn btn-danger btn-sm float-right movespace';
        removeButton.innerHTML = '<i class="icon-trash-2 text-16 text-light-1"></i>'; // Use innerHTML instead of textContent

        removeButton.onclick = function() {
            selectedMenusList.removeChild(listItem);
            selectedMenus = selectedMenus.filter(id => id !== menuId);
            updateSelectedMenuIds();
        };

        listItem.appendChild(removeButton);
        selectedMenusList.appendChild(listItem);
    });

    selectedMenus = initialSelectedMenus;
    updateSelectedMenuIds();
}


        function removeImage(element) {
            if (element && element.parentElement) {
                element.parentElement.remove();
            }
        }
    });
</script>

<script>
    $(document).ready(function() {

        var savedCity = "{{ $restaurant->city ?? '' }}";
        var savedSubTown = "{{ $restaurant->sub_towns ?? '' }}";


        if (savedCity) {
            $('#city').val(savedCity).trigger('change');
        }


        $('#city').change(function() {
            var cityName = $(this).val();
            if (cityName) {
                $('#subTown').prop('disabled', false);
                $.ajax({
                    url: '/owner/get-sub-towns/' + cityName,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#subTown').empty();
                        $('#subTown').append('<option value="">{{ translate('市町区村を選んでください') }}</option>');
                        $.each(data, function(key, value) {

                            var selected = (value.name === savedSubTown) ? 'selected' : '';
                            $('#subTown').append('<option value="' + value.name + '" ' + selected + '>' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#subTown').prop('disabled', true);
                $('#subTown').empty();
                $('#subTown').append('<option value="">{{ translate('市町区村を選んでください') }}</option>');
            }
        });
    });
</script>