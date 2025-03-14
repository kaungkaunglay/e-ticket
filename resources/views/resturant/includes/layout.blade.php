<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from creativelayers.net/themes/r-buzz-html/db-vendor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 09:19:36 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/general/home.png') }}">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <title>r-buzz</title>
</head>

<body data-barba="wrapper">
    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_41)">

                        <image href="{{ asset('assets/img/general/home.png') }}" x="0" y="0" width="100" height="100" />
                    </g>

                    <defs>
                        <clipPath id="clip0_1_41">
                            <rect width="100" height="100" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="preloader__title">r-buzz</div>
    </div>

    <div class="header-margin"></div>
    <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
        <div data-anim="fade" class="header__container px-30 sm:px-20">
            <div class="-left-side">
                <a href="{{route('admin.dashboard')}}" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
                    <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon" />
                    <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon" />
                </a>
            </div>

            <div class="row justify-between items-center pl-60 lg:pl-20">
                <div class="col-auto">
                    <div class="d-flex items-center">
                        <button data-x-click="dashboard">
                            <i class="icon-menu-2 text-20"></i>
                        </button>

                        <!-- <div class="single-field relative d-flex items-center md:d-none ml-30">
                            <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search" />
                            <button class="absolute d-flex items-center h-full">
                                <i class="icon-search text-20 px-15 text-dark-1"></i>
                            </button>
                        </div> -->
                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex items-center">
                        <div class="header-menu" data-x="mobile-menu" data-x-toggle="is-menu-active">
                            <div class="mobile-overlay"></div>

                            <div class="header-menu__content">
                                <div class="mobile-bg js-mobile-bg"></div>

                                <div class="menu js-navList">
                                    <ul class="menu__nav text-dark-1 fw-500 -is-active">
                                        <li>
                                            <a href="{{ route('home') }}">
                                                {{translate('home')}}
                                            </a>
                                        </li>

                                        <!-- <li class="menu-item-has-children -has-mega-menu">
                                            <a data-barba href="#">
                                                <span class="mr-10">{{translate('categories')}}</span>
                                                <i class="icon icon-chevron-sm-down"></i>
                                            </a>

                                            <div class="mega">
                                                <div class="tabs -underline-2 js-tabs">
                                                    <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 pb-30 js-tabs-controls">
                                                        <div class="col-auto">
                                                            <button class="tabs__button text-light-1 fw-500 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Hotel</button>
                                                        </div>
                                                    </div>

                                                    <div class="tabs__content js-tabs-content">
                                                        <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                                            <div class="mega__content">
                                                                <div class="mega__grid">
                                                                    <div class="mega__item">
                                                                        <div class="text-15 fw-500">Hotel List</div>
                                                                        <div class="y-gap-5 text-15 pt-5">
                                                                            <div><a href="hotel-list-1.html">Hotel List v1</a></div>

                                                                            <div><a href="hotel-list-2.html">Hotel List v2</a></div>

                                                                            <div><a href="hotel-half-map.html">Hotel List v3</a></div>

                                                                            <div><a href="hotel-grid-1.html">Hotel List v4</a></div>

                                                                            <div><a href="hotel-grid-2.html">Hotel List v5</a></div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li> -->

                                        <li class="">
                                            <a href="{{ route('about') }}">
                                                <span class="mr-10">{{translate('about_us')}}</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('restaurant-list')}}">{{translate('restaurants')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('support.page')}}">{{translate('support')}}</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer"></div>
                            </div>
                        </div>

                        <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
                            <div class="col-auto">
                                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                                    <i class="icon-email-2 text-20"></i>
                                </button>
                            </div>

                            <div class="col-auto">
                                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                                    <i class="icon-notification text-20"></i>
                                </button>
                            </div>
                        </div>

                        <div class="pl-15">
                            <img src="{{asset('assets/img/avatars/3.png')}}" alt="image" class="size-50 rounded-22 object-cover" />
                        </div>

                        <div class="d-none xl:d-flex x-gap-20 items-center pl-20" data-x="header-mobile-icons" data-x-toggle="text-white">
                            <div><button class="d-flex items-center icon-menu text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
        <div class="dashboard__sidebar bg-white scroll-bar-1">
            <div class="sidebar -dashboard">
                <div class="sidebar__item">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{ asset('assets/img/dashboard/sidebar/compass.svg') }}" alt="image" class="mr-15" />
                        {{translate('dashboard')}}
                    </a>
                </div>

                <div class="sidebar__item">
                    <a href="{{route('adminbooking.dashboard')}}" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{asset('/assets/img/dashboard/sidebar/booking.svg')}}" alt="image" class="mr-15" />
                        {{translate('booking_manager')}}
                    </a>
                </div>

                <div class="sidebar__item">
                    <a href="{{ route('promo.show')}}" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{asset('/assets/img/dashboard/sidebar/booking.svg')}}" alt="image" class="mr-15" />
                        {{translate('promotion_code')}}
                    </a>
                </div>

                <div class="sidebar__item">
                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="{{asset('/assets/img/dashboard/sidebar/hotel.svg')}}" alt="image" class="mr-10" />
                                        {{translate('manage_restaurant_type')}}
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">
                                    <li>
                                        <a href="{{ route('categories.index') }}" class="text-15">{{translate('all_restaurant_type')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('categories.create') }}" class="text-15">{{translate('add_restaurant_type')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="{{asset('/assets/img/dashboard/sidebar/hotel.svg')}}" alt="image" class="mr-10" />
                                        {{translate('manage_restaurant')}}
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">
                                    <li>
                                        <a href="{{ auth()->user()->hasRole('admin') ? route('resturant.index', [], false) : route('vendor.resturant.index', [], false) }}" class="text-15">
                                            {{translate('all_restaurant')}}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ auth()->user()->hasRole('admin') ? route('resturant.create', [], false) : route('vendor.resturant.create', [], false) }}" class="text-15">
                                            {{translate('add_restaurant')}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      
                    
                    <div class="sidebar__item">
                    <a href="{{ route('menu.index')}}" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{asset('/assets/img/dashboard/sidebar/booking.svg')}}" alt="image" class="mr-15" />
                        {{translate('menu')}}
                    </a>
                   </div>

                   <div class="sidebar__item">
                    <a href="{{ route('adminbooking.userlist')}}" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{asset('/assets/img/dashboard/sidebar/booking.svg')}}" alt="image" class="mr-15" />
                        {{translate('user_list')}}
                    </a>
                   </div>
                
                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="{{asset('/assets/img/dashboard/sidebar/hotel.svg')}}" alt="image" class="mr-10" />
                                        {{translate('support')}}
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">
                                    <li>
                                        <a href="{{ route('support.index') }}" class="text-15">{{translate('all_support_list')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('support.category') }}" class="text-15">{{translate('support_category')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar__item">
                    <a href="/logout" class="sidebar__button d-flex items-center text-15 lh-1 fw-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('/assets/img/dashboard/sidebar/log-out.svg') }}" alt="Logout Icon" class="mr-15" />
                        {{translate('logout')}}
                    </a>
                </div>

                <form
                    id="logout-form"
                    method="POST"
                    action="
                        @if(auth()->user()->hasRole('admin'))
                            {{ route('admin.logout') }}
                        @elseif(auth()->user()->hasRole('vendor'))
                            {{ route('vendor.logout') }}
                        @elseif(auth()->user()->hasRole('user'))
                            {{ route('logout') }}
                        @else
                            {{ route('logout') }} 
                        @endif
                    "
                    style="display: none;">
                    @csrf
                </form>

                <!-- <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/map.svg" alt="image" class="mr-10">
                    Manage Tour
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pt-15 pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All Hotels</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Hotel</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Recovery</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/sneakers.svg" alt="image" class="mr-10">
                    Manage Activity
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pt-15 pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All Hotels</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Hotel</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Recovery</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/house.svg" alt="image" class="mr-10">
                    Manage Holiday Rental
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pt-15 pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All Hotels</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Hotel</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Recovery</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/taxi.svg" alt="image" class="mr-10">
                    Manage Car
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pt-15 pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All Hotels</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Hotel</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Recovery</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/canoe.svg" alt="image" class="mr-10">
                    Manage Cruise
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pt-15 pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All Hotels</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Hotel</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Recovery</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/airplane.svg" alt="image" class="mr-10">
                    Manage Flights
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pt-15 pb-5 pl-40">

                  <li>
                    <a href="#" class="text-15">All Resturants</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Add Hotel</a>
                  </li>

                  <li>
                    <a href="#" class="text-15">Recovery</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="sidebar__item ">


          <a href="#" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
            <img src="img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
            Logout
          </a>


        </div> -->
            </div>
        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">
                @yield('content')

                <footer class="footer -dashboard mt-60">
                    <div class="footer__row row y-gap-10 items-center justify-between">
                        <div class="col-auto">
                            <div class="row y-gap-20 items-center">
                                <div class="col-auto">
                                    <div class="text-14 lh-14 mr-30">© 2022 r-buzz LLC All rights reserved.</div>
                                </div>

                                <div class="col-auto">
                                    <div class="row x-gap-20 y-gap-10 items-center text-14">
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Privacy</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Terms</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Site Map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-5 y-gap-5 items-center">
                                <button class="text-14 fw-500 underline">English (US)</button>
                                <button class="text-14 fw-500 underline">USD</button>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script
        src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>

    <script src="{{ asset('assets/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>