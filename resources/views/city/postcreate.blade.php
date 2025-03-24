@extends('resturant.includes.layout')
@section('content')

<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">{{ isset($question) ? translate('edit') : translate('add') }} {{translate('question')}}</h1>
    </div>
</div>

@if(session('success'))
<div class="text-green-500">{{ session('success') }}</div>
@endif

<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <form action="{{ isset($question) ? route('createsupport.storeOrUpdate', $question->id) : route('createsupport.storeOrUpdate') }}"
        method="POST" class="contact-form">
        @csrf

        <div class="row x-gap-20 y-gap-20">

            <div class="col-12">
                <div class="form-input">
                    <select name="support_category" class="form-control" required>
                        <option value="">{{translate('select_category')}}</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ isset($question) && $question->support_category == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-12">
                <div class="form-input">
                    <textarea name="description" placeholder="{{translate('description')}}" class="pt-15">{{ old('description', isset($question) ? $question->description : '') }}</textarea>
                    <!-- <label class="lh-1 text-16 text-light-1">{{translate('description')}}</label> -->
                </div>
            </div>
        </div>

        <div class="d-inline-block pt-30">
            <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                {{translate('save_changes')}} <div class="icon-arrow-top-right ml-15"></div>
            </button>
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
</style>