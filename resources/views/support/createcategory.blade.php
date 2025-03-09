@extends('resturant.includes.layout')

@section('content')

<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">{{ isset($category) ? translate('edit') : translate('add')  }} {{translate('question')}} </h1>
    </div>
</div>

<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <div class="tabs -underline-2 js-tabs">
        <div class="tabs__content pt-30 js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-10">
                    <div class="text-18 fw-500 mb-10">{{translate('question_category')}} </div>

                    @if(session('success'))
                        <div class="text-green-500">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ isset($category) ? route('support.updatecategory', $category->id) : route('support.storecategory') }}">
                        @csrf
                        @if(isset($category))
                            @method('PUT')
                        @endif

                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12">
                                <div class="form-input">
                                    <input type="text" name="title" value="{{ old('title', isset($category) ? $category->title : '') }}" required>
                                    <label class="lh-1 text-16 text-light-1">{{translate('name')}} </label>
                                </div>
                                @error('title')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-inline-block pt-30">
                            <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                {{translate('name')}}<div class="icon-arrow-top-right ml-15"></div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
