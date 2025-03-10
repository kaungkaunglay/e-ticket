@extends('resturant.includes.layout')

@section('content')

<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">{{ isset($menu) ? 'メニューを編集' : 'メニューを追加' }}</h1>
    </div>
</div>

<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <div class="tabs -underline-2 js-tabs">
        <div class="tabs__content pt-30 js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-10">
                    <div class="text-18 fw-500 mb-10">メニュー内容</div>
                    <form method="POST" action="{{ route('menu.storeOrUpdate', $menu->id ?? null) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row x-gap-20 y-gap-20">
                
                        <div class="col-12">
                            <div class="form-input">
                                <input type="text" name="menu" placeholder="メニュー名を入力" value="{{ old('menu', $menu->menu ?? '') }}" required>
                            </div>
                            @error('menu')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

      
        <div class="col-12">
        <label for="image">メニュー画像</label>
            <div class="form-input">
               
                <input type="file" name="image" id="image" accept="image/*">
            </div>
            @error('image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

          
            @if (isset($menu) && $menu->image)
                <div class="mt-10">
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="Menu Image" style="max-width: 200px;">
                </div>
            @endif
        </div>
    </div>

    <div class="d-inline-block pt-30">
        <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
            {{ isset($menu) ? '更新' : '保存' }} <div class="icon-arrow-top-right ml-15"></div>
        </button>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
