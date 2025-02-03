
@extends('includes.layout')
@section('style')

@endsection
@section('contents')
  <main>


    <div class="header-margin"></div>
    <header data-add-bg="" class="header bg-dark-3 js-header" data-x="header" data-x-toggle="is-menu-opened">
      <div data-anim="fade" class="header__container px-30 sm:px-20">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="d-flex items-center">
              <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="{{asset('assets/img/general/logo-light.svg')}}" alt="logo icon">
                <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon">
              </a>


              <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                <div class="mobile-overlay"></div>

                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>

                  <div class="menu js-navList">
                    <ul class="menu__nav text-white -is-active">

                      <li class="menu-item-has-children">
                        <a data-barba href="#">
                          <span class="mr-10">Home</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>


                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Home</a>
                          </li>

                          <li><a href="index.html">Home 1</a></li>

                          <li><a href="home-2.html">Home 2</a></li>

                          <li><a href="home-3.html">Home 3</a></li>

                          <li><a href="home-4.html">Home 4</a></li>

                          <li><a href="home-5.html">Home 5</a></li>

                          <li><a href="home-6.html">Home 6</a></li>

                          <li><a href="home-7.html">Home 7</a></li>

                          <li><a href="home-8.html">Home 8</a></li>

                          <li><a href="home-9.html">Home 9</a></li>

                          <li><a href="home-10.html">Home 10</a></li>

                        </ul>

                      </li>


                      <li class="menu-item-has-children -has-mega-menu">
                        <a data-barba href="#">
                          <span class="mr-10">Categories</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>

                        <div class="mega">
                          <div class="tabs -underline-2 js-tabs">
                            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 pb-30 js-tabs-controls">

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Hotel</button>
                              </div>

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button " data-tab-target=".-tab-item-2">Tour</button>
                              </div>

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button " data-tab-target=".-tab-item-3">Activity</button>
                              </div>

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button " data-tab-target=".-tab-item-4">Holiday Rentals</button>
                              </div>

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button " data-tab-target=".-tab-item-5">Car</button>
                              </div>

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button " data-tab-target=".-tab-item-6">Cruise</button>
                              </div>

                              <div class="col-auto">
                                <button class="tabs__button text-light-1 fw-500 js-tabs-button " data-tab-target=".-tab-item-7">Flights</button>
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

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Hotel Single</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="hotel-single-1.html">Hotel Single v1</a></div>

                                        <div><a href="hotel-single-2.html">Hotel Single v2</a></div>

                                      </div>
                                    </div>

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Hotel Booking</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="booking-pages.html">Booking Page</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="#" data-src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4 js-lazy">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tabs__pane -tab-item-2">
                                <div class="mega__content">
                                  <div class="mega__grid">

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Tour List</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="tour-list-1.html">Tour List v1</a></div>

                                        <div><a href="tour-grid-1.html">Tour List v2</a></div>

                                      </div>
                                    </div>

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Tour Pages</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="tour-map.html">Tour Map</a></div>

                                        <div><a href="tour-single.html">Tour Single</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tabs__pane -tab-item-3">
                                <div class="mega__content">
                                  <div class="mega__grid">

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Activity List</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="activity-list-1.html">Activity List v1</a></div>

                                        <div><a href="activity-grid-1.html">Activity List v2</a></div>

                                      </div>
                                    </div>

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Activity Pages</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="activity-map.html">Activity Map</a></div>

                                        <div><a href="activity-single.html">Activity Single</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tabs__pane -tab-item-4">
                                <div class="mega__content">
                                  <div class="mega__grid">

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Rental List</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="rental-list-1.html">Rental List v1</a></div>

                                        <div><a href="rental-grid-1.html">Rental List v2</a></div>

                                      </div>
                                    </div>

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Rental Pages</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="rental-map.html">Rental Map</a></div>

                                        <div><a href="rental-single.html">Rental Single</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tabs__pane -tab-item-5">
                                <div class="mega__content">
                                  <div class="mega__grid">

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Car List</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="car-list-1.html">Car List v1</a></div>

                                        <div><a href="car-grid-1.html">Car List v2</a></div>

                                      </div>
                                    </div>

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Car Pages</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="car-map.html">Car Map</a></div>

                                        <div><a href="car-single.html">Car Single</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tabs__pane -tab-item-6">
                                <div class="mega__content">
                                  <div class="mega__grid">

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Cruise List</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="cruise-list-1.html">Cruise List v1</a></div>

                                        <div><a href="cruise-grid-1.html">Cruise List v2</a></div>

                                      </div>
                                    </div>

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Cruise Pages</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="cruise-map.html">Cruise Map</a></div>

                                        <div><a href="cruise-single.html">Cruise Single</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tabs__pane -tab-item-7">
                                <div class="mega__content">
                                  <div class="mega__grid">

                                    <div class="mega__item">
                                      <div class="text-15 fw-500">Flight List</div>
                                      <div class="y-gap-5 text-15 pt-5">

                                        <div><a href="flights-list.html">Flight list v1</a></div>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="mega__image d-flex relative">
                                    <img src="{{asset('assets/img/backgrounds/7.png')}}" alt="image" class="rounded-4">

                                    <div class="absolute w-full h-full px-30 py-24">
                                      <div class="text-22 fw-500 lh-15 text-white">Things to do on <br> your trip</div>
                                      <button class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20">Experinces</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <ul class="subnav mega-mobile">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Category</a>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Hotel</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Hotel</a>
                              </li>


                              <li><a href="hotel-list-1.html">Hotel List v1</a></li>

                              <li><a href="hotel-list-2.html">Hotel List v2</a></li>

                              <li><a href="hotel-single-1.html">Hotel Single v1</a></li>

                              <li><a href="hotel-single-2.html">Hotel Single v2</a></li>

                              <li><a href="booking-pages.html">Booking Page</a></li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Tour</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Tour</a>
                              </li>

                              <li><a href="tour-list-1.html">Tour List v1</a></li>

                              <li><a href="tour-grid-1.html">Tour List v2</a></li>

                              <li><a href="tour-map.html">Tour Map</a></li>

                              <li><a href="tour-single.html">Tour Single</a></li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Activity</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Activity</a>
                              </li>

                              <li><a href="activity-list-1.html">Activity List v1</a></li>

                              <li><a href="activity-grid-1.html">Activity List v2</a></li>

                              <li><a href="activity-map.html">Activity Map</a></li>

                              <li><a href="activity-single.html">Activity Single</a></li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Rental</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Rental</a>
                              </li>

                              <li><a href="rental-list-1.html">Rental List v1</a></li>

                              <li><a href="rental-grid-1.html">Rental List v2</a></li>

                              <li><a href="rental-map.html">Rental Map</a></li>

                              <li><a href="rental-single.html">Rental Single</a></li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Car</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Car</a>
                              </li>

                              <li><a href="car-list-1.html">Car List v1</a></li>

                              <li><a href="car-grid-1.html">Car List v2</a></li>

                              <li><a href="car-map.html">Car Map</a></li>

                              <li><a href="car-single.html">Car Single</a></li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Cruise</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Cruise</a>
                              </li>

                              <li><a href="cruise-list-1.html">Cruise List v1</a></li>

                              <li><a href="cruise-grid-1.html">Cruise List v2</a></li>

                              <li><a href="cruise-map.html">Cruise Map</a></li>

                              <li><a href="cruise-single.html">Cruise Single</a></li>

                            </ul>
                          </li>

                          <li class="menu-item-has-children">
                            <a data-barba href="#">
                              <span class="mr-10">Flights</span>
                              <i class="icon icon-chevron-sm-down"></i>
                            </a>

                            <ul class="subnav">
                              <li class="subnav__backBtn js-nav-list-back">
                                <a href="#"><i class="icon icon-chevron-sm-down"></i> Flights</a>
                              </li>

                              <li><a href="flights-list.html">Flights List v1</a></li>

                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li>
                        <a href="destinations.html">
                          Destinations
                        </a>
                      </li>


                      <li class="menu-item-has-children">
                        <a data-barba href="#">
                          <span class="mr-10">Blog</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>


                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Blog</a>
                          </li>

                          <li><a href="blog-list-1.html">Blog list v1</a></li>

                          <li><a href="blog-list-2.html">Blog list v2</a></li>

                          <li><a href="blog-single.html">Blog single</a></li>

                        </ul>

                      </li>


                      <li class="menu-item-has-children">
                        <a data-barba href="#">
                          <span class="mr-10">Pages</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>


                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Pages</a>
                          </li>

                          <li><a href="404.html">404</a></li>

                          <li><a href="about.html">About</a></li>

                          <li><a href="become-expert.html">Become expert</a></li>

                          <li><a href="help-center.html">Help center</a></li>

                          <li><a href="login.html">Login</a></li>

                          <li><a href="signup.html">Register</a></li>

                          <li><a href="terms.html">Terms</a></li>

                          <li><a href="invoice.html">Invoice</a></li>

                          <li><a href="ui-elements.html">UI elements</a></li>

                        </ul>

                      </li>


                      <li class="menu-item-has-children">
                        <a data-barba href="#">
                          <span class="mr-10">Dashboard</span>
                          <i class="icon icon-chevron-sm-down"></i>
                        </a>


                        <ul class="subnav">
                          <li class="subnav__backBtn js-nav-list-back">
                            <a href="#"><i class="icon icon-chevron-sm-down"></i> Dashboard</a>
                          </li>

                          <li><a href="db-dashboard.html">Dashboard</a></li>

                          <li><a href="db-booking.html">Booking</a></li>

                          <li><a href="db-settings.html">Settings</a></li>

                          <li><a href="db-wishlist.html">Wishlist</a></li>

                          <li><a href="db-vendor-dashboard.html">Vendor dashboard</a></li>

                          <li><a href="db-vendor-add-hotel.html">Vendor add hotel</a></li>

                          <li><a href="db-vendor-booking.html">Vendor booking</a></li>

                          <li><a href="db-vendor-hotels.html">Vendor hotels</a></li>

                          <li><a href="db-vendor-recovery.html">Vendor recovery</a></li>

                        </ul>

                      </li>


                      <li>
                        <a href="contact.html">Contact</a>
                      </li>
                    </ul>
                  </div>

                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="col-auto">
            <div class="d-flex items-center">

              <div class="row x-gap-20 items-center xxl:d-none">
                <div class="col-auto">
                  <button class="d-flex items-center text-14 text-white" data-x-click="currency">
                    <span class="js-currencyMenu-mainTitle">USD</span>
                    <i class="icon-chevron-sm-down text-7 ml-10"></i>
                  </button>
                </div>

                <div class="col-auto">
                  <div class="w-1 h-20 bg-white-20"></div>
                </div>

                <div class="col-auto">
                  <button class="d-flex items-center text-14 text-white" data-x-click="lang">
                    <img src="{{asset('assets/img/general/lang.png')}}" alt="image" class="rounded-full mr-10">
                    <span class="js-language-mainTitle">United Kingdom</span>
                    <i class="icon-chevron-sm-down text-7 ml-15"></i>
                  </button>
                </div>
              </div>


              <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                <a href="login.html" class="button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1">Become An Expert</a>
                <a href="signup.html" class="button px-30 fw-400 text-14 border-white -blue-1 h-50 text-white ml-20">Sign In / Register</a>
              </div>

              <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
                <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>


    <section class="pt-40">
      <div class="container">
        <div class="row x-gap-40 y-gap-30 items-center">
          <div class="col-auto">
            <div class="d-flex items-center">
              <div class="size-40 rounded-full flex-center bg-blue-1">
                <i class="icon-check text-16 text-white"></i>
              </div>
              <div class="text-18 fw-500 ml-10">Your selection</div>
            </div>
          </div>

          <div class="col">
            <div class="w-full h-1 bg-border"></div>
          </div>

          <div class="col-auto">
            <div class="d-flex items-center">
              <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">2</div>
              <div class="text-18 fw-500 ml-10">Your details</div>
            </div>
          </div>

          <div class="col">
            <div class="w-full h-1 bg-border"></div>
          </div>

          <div class="col-auto">
            <div class="d-flex items-center">
              <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">3</div>
              <div class="text-18 fw-500 ml-10">Final step</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-40 layout-pb-md">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-8">
            <div class="py-15 px-20 rounded-4 text-15 bg-blue-1-05">
              Sign in to book with your saved details or
              <a href="#" class="text-blue-1 fw-500">register</a>
              to manage your bookings on the go!
            </div>

            <h2 class="text-22 fw-500 mt-40 md:mt-24">Let us know who you are</h2>

            <div class="row x-gap-20 y-gap-20 pt-20">
              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Full Name</label>
                </div>

              </div>
              <div class="col-md-6">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Email</label>
                </div>

              </div>
              <div class="col-md-6">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Phone Number</label>
                </div>

              </div>
              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Address line 1</label>
                </div>

              </div>
              <div class="col-12">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Address line 2</label>
                </div>

              </div>
              <div class="col-md-6">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">State/Province/Region</label>
                </div>

              </div>
              <div class="col-md-6">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">ZIP code/Postal code</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <textarea required rows="6"></textarea>
                  <label class="lh-1 text-16 text-light-1">Special Requests</label>
                </div>

              </div>

              <div class="col-12">
                <div class="row y-gap-20 items-center justify-between">
                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      By proceeding with this booking, I agree to GoTrip Terms of Use and Privacy Policy.
                    </div>
                  </div>

                  <div class="col-auto">

                    <a href="#" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                      Next: Final details <div class="icon-arrow-top-right ml-15"></div>
                    </a>

                  </div>
                </div>
              </div>
            </div>

            <div class="row y-gap-30 pt-40">
              <div class="col-12">
                <div class="px-24 py-20 rounded-4 bg-green-1">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <div class="flex-center size-60 rounded-full bg-white">
                        <i class="icon-star text-yellow-1 text-30"></i>
                      </div>
                    </div>

                    <div class="col-auto">
                      <h4 class="text-18 lh-15 fw-500">This property is in high demand!</h4>
                      <div class="text-15 lh-15">7 travelers have booked today.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row y-gap-30 pt-10">
              <div class="col-12">
                <div class="px-24 py-20 rounded-4 bg-light-2">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <div class="flex-center size-60 rounded-full bg-white">
                        <i class="icon-star text-yellow-1 text-30"></i>
                      </div>
                    </div>

                    <div class="col-auto">
                      <h4 class="text-18 lh-15 fw-500">Limited supply in London for your dates:</h4>
                      <div class="text-15 lh-15">27 four-star hotels like this are already unavailable on our site</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-40">
              <h3 class="text-22 fw-500 mb-20">How do you want to pay?</h3>

              <div class="row y-gap-20 x-gap-20">
                <div class="col-auto">
                  <button class="button -dark-1 bg-blue-1 text-white px-20 py-15">Credit/Debit Card</button>
                </div>

                <div class="col-auto">
                  <button class="button -blue-1 bg-light-2 px-20 py-15">Digital Payment</button>
                </div>
              </div>

              <div class="row x-gap-20 y-gap-20 pt-20">
                <div class="col-12">

                  <div class="form-input ">
                    <input type="text" required>
                    <label class="lh-1 text-16 text-light-1">Select payment method *</label>
                  </div>

                </div>

                <div class="col-md-6">

                  <div class="form-input ">
                    <input type="text" required>
                    <label class="lh-1 text-16 text-light-1">Card holder name *</label>
                  </div>


                  <div class="form-input mt-20">
                    <input type="text" required>
                    <label class="lh-1 text-16 text-light-1">Credit/debit card number *</label>
                  </div>


                  <div class="row x-gap-20 y-gap-20 pt-20">
                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Expiry date *</label>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-input ">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">CVC/CVV *</label>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <img src="{{asset('assets/img/booking-pages/card.png')}}" alt="image" class="h-full">
                </div>
              </div>
            </div>

            <div class="mt-60 md:mt-32">
              <div class="row y-gap-20 x-gap-20">
                <div class="col-auto">
                  <button class="button -dark-1 bg-blue-1 text-white px-20 py-15">Credit/Debit Card</button>
                </div>

                <div class="col-auto">
                  <button class="button -blue-1 bg-light-2 px-20 py-15">Digtal Payment</button>
                </div>
              </div>

              <div class="mt-20">

                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Select payment method *</label>
                </div>

              </div>

              <div class="mt-20">
                <ul class="list-disc y-gap-4 text-15 text-light-1">
                  <li>You have chosen to pay by PayPal. You will be forwarded to the PayPal website to proceed with this transaction.</li>
                  <li>The total amount you will be charged is: $2,338.01</li>
                </ul>
              </div>
            </div>

            <div class="w-full h-1 bg-border mt-40 mb-40"></div>

            <div class="row y-gap-20 items-center justify-between">
              <div class="col-auto">

                <div class="d-flex items-center">
                  <div class="form-checkbox ">
                    <input type="checkbox" name="name">
                    <div class="form-checkbox__mark">
                      <div class="form-checkbox__icon icon-check"></div>
                    </div>
                  </div>

                  <div class="text-14 lh-10 text-light-1 ml-10">Get access to members-only deals, just like the millions of other email subscribers</div>

                </div>

              </div>

              <div class="col-auto">

                <a href="#" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                  Book Now <div class="icon-arrow-top-right ml-15"></div>
                </a>

              </div>
            </div>

            <div class="d-flex flex-column items-center mt-60 lg:md-40 sm:mt-24">
              <div class="size-80 flex-center rounded-full bg-dark-3">
                <i class="icon-check text-30 text-white"></i>
              </div>

              <div class="text-30 lh-1 fw-600 mt-20">System, your order was submitted successfully!</div>
              <div class="text-15 text-light-1 mt-10">Booking details has been sent to: admin@bookingcore.test</div>
            </div>

            <div class="border-type-1 rounded-8 px-50 py-35 mt-40">
              <div class="row">

                <div class="col-lg-3 col-md-6">
                  <div class="text-15 lh-12">Order Number</div>
                  <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">13119</div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="text-15 lh-12">Date</div>
                  <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">27/07/2021</div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="text-15 lh-12">Total</div>
                  <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">$40.10</div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="text-15 lh-12">Payment Method</div>
                  <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">Direct Bank Transfer</div>
                </div>

              </div>
            </div>

            <div class="border-light rounded-8 px-50 py-40 mt-40">
              <h4 class="text-20 fw-500 mb-30">Your Information</h4>

              <div class="row y-gap-10">

                <div class="col-12">
                  <div class="d-flex justify-between ">
                    <div class="text-15 lh-16">First name</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1">System</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Last name</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1">Admin</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Email</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1">admin@bookingcore.test</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Phone</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1">112 666 888</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Address line 1</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Address line 2</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">City</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1">New York</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">State/Province/Region</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">ZIP code/Postal code</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Country</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1">United States</div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="d-flex justify-between border-top-light pt-10">
                    <div class="text-15 lh-16">Special Requirements</div>
                    <div class="text-15 lh-16 fw-500 text-blue-1"></div>
                  </div>
                </div>

              </div>
            </div>

          </div>

          <div class="col-xl-5 col-lg-4">
            <div class="ml-80 lg:ml-40 md:ml-0">
              <div class="px-30 py-30 border-light rounded-4">
                <div class="text-20 fw-500 mb-30">Your booking details</div>

                <div class="row x-gap-15 y-gap-20">
                  <div class="col-auto">
                    <img src="{{asset('assets/img/backgrounds/1.png')}}" alt="image" class="size-140 rounded-4 object-cover">
                  </div>

                  <div class="col">
                    <div class="d-flex x-gap-5 pb-10">

                      <i class="icon-star text-yellow-1 text-10"></i>

                      <i class="icon-star text-yellow-1 text-10"></i>

                      <i class="icon-star text-yellow-1 text-10"></i>

                      <i class="icon-star text-yellow-1 text-10"></i>

                      <i class="icon-star text-yellow-1 text-10"></i>

                    </div>

                    <div class="lh-17 fw-500">Great Northern Hotel, a Tribute Portfolio Hotel, London</div>
                    <div class="text-14 lh-15 mt-5">Westminster Borough, London</div>

                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="size-30 flex-center bg-blue-1 rounded-4">
                            <div class="text-12 fw-600 text-white">4.8</div>
                          </div>

                          <div class="text-14 fw-500 ml-10">Exceptional</div>
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="text-14">3,014 reviews</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="border-top-light mt-30 mb-20"></div>

                <div class="row y-gap-20 justify-between">
                  <div class="col-auto">
                    <div class="text-15">Check-in</div>
                    <div class="fw-500">Thu 21 Apr 2022</div>
                    <div class="text-15 text-light-1">15:00 – 23:00</div>
                  </div>

                  <div class="col-auto md:d-none">
                    <div class="h-full w-1 bg-border"></div>
                  </div>

                  <div class="col-auto text-right md:text-left">
                    <div class="text-15">Check-out</div>
                    <div class="fw-500">Sat 30 Apr 2022</div>
                    <div class="text-15 text-light-1">01:00 – 11:00</div>
                  </div>
                </div>

                <div class="border-top-light mt-30 mb-20"></div>

                <div class="">
                  <div class="text-15">Total length of stay:</div>
                  <div class="fw-500">9 nights</div>
                  <a href="#" class="text-15 text-blue-1 underline">Travelling on different dates?</a>
                </div>

                <div class="border-top-light mt-30 mb-20"></div>

                <div class="row y-gap-20 justify-between items-center">
                  <div class="col-auto">
                    <div class="text-15">You selected:</div>
                    <div class="fw-500">Superior Double Studio</div>
                    <a href="#" class="text-15 text-blue-1 underline">Change your selection</a>
                  </div>

                  <div class="col-auto">
                    <div class="text-15">1 room, 4 adult</div>
                  </div>
                </div>
              </div>

              <div class="px-30 py-30 border-light rounded-4 mt-30">
                <div class="text-20 fw-500 mb-20">Your price summary</div>

                <div class="row y-gap-5 justify-between">
                  <div class="col-auto">
                    <div class="text-15">Superior Twin</div>
                  </div>
                  <div class="col-auto">
                    <div class="text-15">US$3,372.34</div>
                  </div>
                </div>

                <div class="row y-gap-5 justify-between pt-5">
                  <div class="col-auto">
                    <div class="text-15">Taxes and fees</div>
                  </div>
                  <div class="col-auto">
                    <div class="text-15">US$674.47</div>
                  </div>
                </div>

                <div class="row y-gap-5 justify-between pt-5">
                  <div class="col-auto">
                    <div class="text-15">Booking fees</div>
                  </div>
                  <div class="col-auto">
                    <div class="text-15">FREE</div>
                  </div>
                </div>

                <div class="px-20 py-20 bg-blue-2 rounded-4 mt-20">
                  <div class="row y-gap-5 justify-between">
                    <div class="col-auto">
                      <div class="text-18 lh-13 fw-500">Price</div>
                    </div>
                    <div class="col-auto">
                      <div class="text-18 lh-13 fw-500">US$4,046.81</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="px-30 py-30 border-light rounded-4 mt-30">
                <div class="text-20 fw-500 mb-20">Your payment schedule</div>

                <div class="row y-gap-5 justify-between">
                  <div class="col-auto">
                    <div class="text-15">Before you stay you'll pay</div>
                  </div>
                  <div class="col-auto">
                    <div class="text-15">US$4,047</div>
                  </div>
                </div>
              </div>

              <div class="px-30 py-30 border-light rounded-4 mt-30">
                <div class="text-20 fw-500 mb-15">Do you have a promo code?</div>


                <div class="form-input ">
                  <input type="text" required>
                  <label class="lh-1 text-16 text-light-1">Enter promo code</label>
                </div>


                <button class="button -outline-blue-1 text-blue-1 px-30 py-15 mt-20">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Why Choose Us</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-40 justify-between pt-50">

          <div class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="{{asset('assets/img/featureIcons/1/1.svg')}}" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="{{asset('assets/img/featureIcons/1/2.svg')}}" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="{{asset('assets/img/featureIcons/1/3.svg')}}" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md bg-dark-2">
      <div class="container">
        <div class="row y-gap-30 justify-between items-center">
          <div class="col-auto">
            <div class="row y-gap-20  flex-wrap items-center">
              <div class="col-auto">
                <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
              </div>

              <div class="col-auto">
                <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                <div class="text-white">Sign up and we'll send the best deals to you</div>
              </div>
            </div>
          </div>

          <div class="col-auto">
            <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
              <div>
                <input class="bg-white h-60" type="text" placeholder="Your Email">
              </div>

              <div>
                <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer -type-1">
      <div class="container">
        <div class="pt-60 pb-60">
          <div class="row y-gap-40 justify-between xl:justify-start">
            <div class="col-xl-2 col-lg-4 col-sm-6">
              <h5 class="text-16 fw-500 mb-30">Contact Us</h5>

              <div class="mt-30">
                <div class="text-14 mt-30">Toll Free Customer Care</div>
                <a href="#" class="text-18 fw-500 text-blue-1 mt-5">+(1) 123 456 7890</a>
              </div>

              <div class="mt-35">
                <div class="text-14 mt-30">Need live support?</div>
                <a href="#" class="text-18 fw-500 text-blue-1 mt-5">hi@gotrip.com</a>
              </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
              <h5 class="text-16 fw-500 mb-30">Company</h5>
              <div class="d-flex y-gap-10 flex-column">
                <a href="#">About Us</a>
                <a href="#">Careers</a>
                <a href="#">Blog</a>
                <a href="#">Press</a>
                <a href="#">Gift Cards</a>
                <a href="#">Magazine</a>
              </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
              <h5 class="text-16 fw-500 mb-30">Support</h5>
              <div class="d-flex y-gap-10 flex-column">
                <a href="#">Contact</a>
                <a href="#">Legal Notice</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Sitemap</a>
              </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
              <h5 class="text-16 fw-500 mb-30">Other Services</h5>
              <div class="d-flex y-gap-10 flex-column">
                <a href="#">Car hire</a>
                <a href="#">Activity Finder</a>
                <a href="#">Tour List</a>
                <a href="#">Flight finder</a>
                <a href="#">Cruise Ticket</a>
                <a href="#">Holiday Rental</a>
                <a href="#">Travel Agents</a>
              </div>
            </div>

            <div class="col-xl-2 col-lg-4 col-sm-6">
              <h5 class="text-16 fw-500 mb-30">Mobile</h5>

              <div class="d-flex items-center px-20 py-10 rounded-4 border-light">
                <div class="icon-apple text-24"></div>
                <div class="ml-20">
                  <div class="text-14 text-light-1">Download on the</div>
                  <div class="text-15 lh-1 fw-500">Apple Store</div>
                </div>
              </div>

              <div class="d-flex items-center px-20 py-10 rounded-4 border-light mt-20">
                <div class="icon-play-market text-24"></div>
                <div class="ml-20">
                  <div class="text-14 text-light-1">Get in on</div>
                  <div class="text-15 lh-1 fw-500">Google Play</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-20 border-top-light">
          <div class="row justify-between items-center y-gap-10">
            <div class="col-auto">
              <div class="row x-gap-30 y-gap-10">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    © 2022 GoTrip LLC All rights reserved.
                  </div>
                </div>

                <div class="col-auto">
                  <div class="d-flex x-gap-15">
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Site Map</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="row y-gap-10 items-center">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <button class="d-flex items-center text-14 fw-500 text-dark-1 mr-10">
                      <i class="icon-globe text-16 mr-10"></i>
                      <span class="underline">English (US)</span>
                    </button>

                    <button class="d-flex items-center text-14 fw-500 text-dark-1">
                      <i class="icon-usd text-16 mr-10"></i>
                      <span class="underline">USD</span>
                    </button>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="d-flex x-gap-20 items-center">
                    <a href="#"><i class="icon-facebook text-14"></i></a>
                    <a href="#"><i class="icon-twitter text-14"></i></a>
                    <a href="#"><i class="icon-instagram text-14"></i></a>
                    <a href="#"><i class="icon-linkedin text-14"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </main>

 @endsection