<div class="tabs__pane -tab-item-2">
    <div class="col-xl-9">
        <h3 class="text-20 fw-600">Booking History</h3>
        <div class="card p-4 mt-3">
            @if($bookings->isEmpty())
            <p>No bookings found.</p>
            @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Restaurant Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Price Range</th>
                        <!-- <th>Web Url</th> -->
                        <th>Booking Date</th>
                       
                        <th>Note</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->restaurant->name }}</td>
                        <td>{{ $booking->restaurant->address }}</td>
                        <td>{{ $booking->restaurant->city }}</td>
                        <td>{{ $booking->restaurant->phone_number }}</td>
                        <td>¥{{ number_format($booking->restaurant->price_range) }} </td>
                        <!-- <td>{{ $booking->restaurant->website_url}}</td> -->

                        <td>{{ $booking->select_date }}</td>
                        <td>{{ $booking->note ?? 'No Note' }} </td>
                        <td>
                            <a href="/restaurant/{{ $booking->restaurant_id }}" title="View Restaurant">
                                <button class="button bg-red h-10 text-white" style="
                                width: 72px;
                            ">Preview</button>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>