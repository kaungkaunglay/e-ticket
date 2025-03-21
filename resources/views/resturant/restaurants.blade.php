@extends('resturant.includes.layout')

@section('content')
<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">

        <h1 class="text-30 lh-14 fw-600">{{translate('all_restaurant')}}</h1>


    </div>

    <div class="col-auto">


        <a href="{{route('resturant.create')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
            {{translate('add_restaurant')}} <div class="icon-arrow-top-right ml-15"></div>
        </a>


    </div>
</div>


<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <div class="tabs -underline-2 js-tabs">
        <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">{{translate('all_restaurant')}}</button>
            </div>
        </div>

        <div class="tabs__content pt-30 js-tabs-content">

            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                    <table class="table-4 -border-bottom col-12">
                        <thead class="bg-light-2">
                            <tr>
                                <th>{{translate('name')}}</th>
                                <th>{{translate('location')}}</th>
                                <th>{{translate('restaurant_name')}}</th>
                                <th>{{translate('status')}}</th>
                                <th>{{translate('created')}}</th>
                                <th>{{translate('action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($restaurants as $restaurant)
                            <tr>
                                <td class="text-blue-1 fw-500">{{$restaurant->name}}</td>
                                <td>{{$restaurant->city}}</td>
                                <td>{{$restaurant->address}}</td>
                                <th>
                                    <span style="color: {{ $restaurant->status == 1 ? 'green' : 'orange' }}; font-weight: bold;">
                                        {{ $restaurant->status == 1 ? 'Approved' : 'Pending' }}
                                    </span>
                                </th>

                                <td>{{$restaurant->created_at->format('d m y')}}</td>
                                <td>
                                    <div class="row x-gap-10 y-gap-10 items-center">

                                        <!-- <div class="col-auto">
                                            <button class="flex-center bg-light-2 rounded-4 size-35">
                                                <i class="icon-eye text-16 text-light-1"></i>
                                            </button>
                                        </div> -->

                                        <div class="col-auto">
                                            <a href="{{ route('resturant.edit', $restaurant->id) }}">
                                                <button class="flex-center bg-light-2 rounded-4 size-35">
                                                    <i class="icon-edit text-16 text-light-1"></i>
                                                </button>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <form action="{{ route('resturant.destroy', $restaurant->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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

    <div class="pt-30">
        {{ $restaurants->links('pagination::bootstrap-4') }}
        <!-- <div class="row justify-between">
            <div class="col-auto">
                <button class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-left text-12"></i>
                </button>
            </div>

            <div class="col-auto">
                <div class="row x-gap-20 y-gap-20 items-center">

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full">1</div>

                    </div>

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                    </div>

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full">3</div>

                    </div>

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                    </div>

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full">5</div>

                    </div>

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full">...</div>

                    </div>

                    <div class="col-auto">

                        <div class="size-40 flex-center rounded-full">20</div>

                    </div>

                </div>
            </div>

            <div class="col-auto">
                <button class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-right text-12"></i>
                </button>
            </div>
        </div> -->
    </div>
</div>
@endsection