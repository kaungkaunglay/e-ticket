@extends('resturant.includes.layout')

@section('content')
<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">

        <h1 class="text-30 lh-14 fw-600">Support Question Cateogry</h1>
        <div class="text-15 text-light-1"></div>

    </div>

    <div class="col-auto">


        <a href="{{route('support.createcategory')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
            Add Question Category<div class="icon-arrow-top-right ml-15"></div>
        </a>


    </div>
</div>


<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <div class="tabs -underline-2 js-tabs">
        <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Question Category</button>
            </div>
        </div>

        <div class="tabs__content pt-30 js-tabs-content">

            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                    <table class="table-4 -border-bottom col-12">
                        <thead class="bg-light-2">
                            <tr>
                                <th>Category Name</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td class="text-blue-1 fw-500">{{ $category->title }}</td>
                                <td>{{ $category->created_at->format('Y-m-d') }}</td>

                                <td>
                                    <div class="row x-gap-10 y-gap-10 items-center">

                                        <div class="col-auto">
                                            <button class="flex-center bg-light-2 rounded-4 size-35">
                                                <i class="icon-eye text-16 text-light-1"></i>
                                            </button>
                                        </div>

                                        <div class="col-auto">
                                            <a href="{{ route('support-category.edit', $category->id) }}">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-edit text-16 text-light-1"></i>
                                                </button>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="flex-center bg-light-2 rounded-4 size-35 border-0">
                                                    <i class="icon-trash-2 text-16 text-light-1"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection