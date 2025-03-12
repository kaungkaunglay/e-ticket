@extends('resturant.includes.layout')

@section('content')
<div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
    <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">{{translate('all_booking')}}</h1>
    </div>

    <div class="col-auto">
        <!-- <a href="{{locale_route('menu.manage')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
            {{translate('menu_create')}} <div class="icon-arrow-top-right ml-15"></div>
        </a> -->
    </div>
</div>

<div class="py-30 px-30 rounded-4 bg-white shadow-3">
    <div class="tabs -underline-2 js-tabs">
        <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
            <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">{{translate('all_booking')}}</button>
            </div>
        </div>

        <div class="tabs__content pt-30 js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                <table class="table table-striped">
    <thead>
        <tr>
            <th>{{translate('name')}}</th>
            <th>{{translate('address')}}</th>
            <!-- <th>City</th> -->
            <th>{{translate('phone')}}</th>
            <th>{{translate('price')}}</th>
            <!-- <th>Web Url</th> -->
            <th>{{translate('note')}}</th>
            <th>Note</th>
            <th>{{translate('view')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
           
            <td>{{ $booking->restaurant_name }}</td>
        
            <td>{{ $booking->restaurant_address }}</td>
       
            <!-- <td>{{ $booking->city }}</td> -->
        
            <td>{{ $booking->phone_number }}</td>
           
            <td>¥{{ number_format($booking->price_range) }}</td>
            <!-- <td>{{ $booking->website_url }}</td> -->

        
            <td>{{ $booking->select_date }}</td>
           
            <td>{{ $booking->note ?? 'No Note' }}</td>

       
            <td>
                <a href="/restaurant/{{ $booking->restaurant_id }}" title="View Restaurant">
                    <button class="button bg-red h-10 text-white" style="width: 72px;">
                        Preview
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-30 pagination d-flex">
        
    </div>
</div>
@endsection