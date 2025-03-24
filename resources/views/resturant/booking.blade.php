@extends('resturant.includes.layout')

@section('content')
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">
            <h1 class="text-30 lh-14 fw-600">{{ translate('all_booking') }}</h1>
        </div>

        <div class="col-auto">
            <!-- <a href="{{ locale_route('menu.manage') }}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                {{ translate('menu_create') }} <div class="icon-arrow-top-right ml-15"></div>
            </a> -->
        </div>
    </div>

    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
        <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                <div class="col-auto">
                    <button
                        class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">{{ translate('all_booking') }}</button>
                </div>
            </div>

            <div class="tabs__content pt-30 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="">
                        <div class="d-flex justify-between">
                            <button class="button -md -dark-1 bg-red h-50 text-white" id="clearFilter">Clear Filter</button>
                            <div class=""><label for="dateFilter">Filter by Date:</label>
                                <div class="d-flex">
                                    <input type="date" id="dateFilter" class="me-3">
                                <button class="button p-2 -dark-1 bg-blue-1 text-white" id="filterButton">Filter</button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped display" id="myTable">
                            <thead>
                                <tr>
                                    <th>{{ translate('name') }}</th>
                                    <th>{{ translate('address') }}</th>
                                    <!-- <th>City</th> -->
                                    <th>{{ translate('phone') }}</th>
                                    <th>{{ translate('price') }}</th>
                                    <!-- <th>Web Url</th> -->
                                    <th>{{ translate('booking_date') }}</th>
                                    <th>Note</th>
                                    <th>{{ translate('view') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    <tr>

                                        <td>{{ $booking->restaurant_name }}</td>

                                        <td>{{ $booking->restaurant_address }}</td>

                                        <!-- <td>{{ $booking->city }}</td> -->

                                        <td>{{ $booking->phone_number }}</td>

                                        <td>¥{{ number_format($booking->price_range) }}</td>
                                        <!-- <td>{{ $booking->website_url }}</td> -->

        
            <td>{{ $booking->select_date }}</td>
           
            <td>{{ $booking->note ?? 'ユーザーコメントがありません' }}</td>


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

    <script>
      $(document).ready(function() {
  var table = $('#myTable').DataTable({
    paging: true,
    searching: true,
    ordering: true
  });

  // Filter button click event
  $('#filterButton').on('click', function() {
    var selectedDate = $('#dateFilter').val(); // Get the selected date in YYYY-MM-DD format

    // console.log(selectedDate);

    if (selectedDate) {
      // Convert the selected date to YYYY/MM/DD format
    //   var formattedSelectedDate = selectedDate;

      // Custom search function to match dates
      $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
        var rowDate = data[4]; // Get the date from the "Start Date" column (index 4)

        console.log(selectedDate);

        console.log(rowDate);

        // Compare the dates
        return rowDate === selectedDate;
      });

      table.draw(); // Redraw the table with the filtered results

      // Remove the custom search function after filtering
      $.fn.dataTable.ext.search.pop();
    } else {
      alert('Please select a date to filter.'); // Prompt the user to select a date
    }
  });

  // Clear filter button click event
  $('#clearFilter').on('click', function() {
    $('#dateFilter').val(''); // Clear the date input
    table.search('').columns().search('').draw(); // Clear all filters and redraw the table
  });
});
    </script>
@endsection
