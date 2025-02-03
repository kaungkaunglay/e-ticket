@extends('includes.layout')
@section('style')

@endsection
@section('contents')

<main>


<div class="header-margin"></div>
<header data-add-bg="" class="header bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
  <div data-anim="fade" class="header__container px-30 sm:px-20">
    <div class="row justify-between items-center">

      <div class="col-auto">
        <div class="d-flex items-center">
          <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
            <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon">
            <img src="{{asset('assets/img/general/logo-dark.svg')}}" alt="logo icon">
          </a>


          <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
            <div class="mobile-overlay"></div>

            <div class="header-menu__content">
              <div class="mobile-bg js-mobile-bg"></div>

              <div class="menu js-navList">
                <ul class="menu__nav text-dark-1 -is-active">

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
              <button class="d-flex items-center text-14 text-dark-1" data-x-click="currency">
                <span class="js-currencyMenu-mainTitle">USD</span>
                <i class="icon-chevron-sm-down text-7 ml-10"></i>
              </button>
            </div>

            <div class="col-auto">
              <div class="w-1 h-20 bg-black-20"></div>
            </div>

            <div class="col-auto">
              <button class="d-flex items-center text-14 text-dark-1" data-x-click="lang">
                <img src="{{asset('assets/img/general/lang.png')}}" alt="image" class="rounded-full mr-10">
                <span class="js-language-mainTitle">United Kingdom</span>
                <i class="icon-chevron-sm-down text-7 ml-15"></i>
              </button>
            </div>
          </div>


          <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
            <a href="login.html" class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-white">Become An Expert</a>
            <a href="signup.html" class="button px-30 fw-400 text-14 -outline-blue-1 h-50 text-blue-1 ml-20">Sign In / Register</a>
          </div>

          <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons" data-x-toggle="text-white">
            <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div>
            <div><button class="d-flex items-center icon-menu text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>


<section class="section-bg layout-pt-lg layout-pb-lg">
  <div class="section-bg__item col-12">
    <img src="{{asset('assets/img/pages/about/1.png')}}" alt="image">
  </div>

  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-xl-6 col-lg-8 col-md-10">
        <h1 class="text-40 md:text-25 fw-600 text-white">Looking for joy?</h1>
        <div class="text-white mt-15">Your trusted trip companion</div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-lg layout-pb-md">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Why Choose Us</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
        </div>
      </div>
    </div>

    <div class="row y-gap-40 justify-between pt-50">

      <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

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

      <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

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

      <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">

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

<section class="layout-pt-md">
  <div class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div class="col-lg-5">
        <h2 class="text-30 fw-600">About GoTrip.com</h2>
        <p class="mt-5">These popular destinations have a lot to offer</p>

        <p class="text-dark-1 mt-60 lg:mt-40 md:mt-20">
          London is a shining example of a metropolis at the highest peak of modernity and boasts an economy and cultural diversity that’s the envy of other global superpowers.
          <br><br>
          Take the opportunity to acquaint yourself with its fascinating history chronicled by institutions like the British Museum as well as see how far it has come by simply riding the Tube and passing by celebrated landmarks like Buckingham Palace, Westminster Abbey, and marvels like Big Ben, the London Eye, and the Tower Bridge.
        </p>
      </div>

      <div class="col-lg-6">
        <img src="{{asset('assets/img/pages/about/2.png')}}" alt="image" class="rounded-4">
      </div>
    </div>
  </div>
</section>

<section class="pt-60">
  <div class="container">
    <div class="border-bottom-light pb-40">
      <div class="row y-gap-30 justify-center text-center">

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">4,958</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
        </div>

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">2,869</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Total Properties</div>
        </div>

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">2M</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Happy customers</div>
        </div>

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">574,974</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Our Volunteers</div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="layout-pt-lg layout-pb-lg">
  <div class="container">
    <div class="row y-gap-20 justify-between items-end">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Our Team</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="col-auto">

        <div class="d-flex x-gap-15 items-center justify-center">
          <div class="col-auto">
            <button class="d-flex items-center text-24 arrow-left-hover js-team-prev">
              <i class="icon icon-arrow-left"></i>
            </button>
          </div>

          <div class="col-auto">
            <div class="pagination -dots text-border js-team-pag"></div>
          </div>

          <div class="col-auto">
            <button class="d-flex items-center text-24 arrow-right-hover js-team-next">
              <i class="icon icon-arrow-right"></i>
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="overflow-hidden pt-40 js-section-slider" data-gap="30" data-slider-cols="xl-5 lg-4 md-2 sm-2 base-1" data-nav-prev="js-team-prev" data-pagination="js-team-pag" data-nav-next="js-team-next">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/1.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Cody Fisher</div>
              <div class="text-14 lh-15">Medical Assistant</div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/2.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Dianne Russell</div>
              <div class="text-14 lh-15">Web Designer</div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/3.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Jerome Bell</div>
              <div class="text-14 lh-15">Marketing Coordinator</div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/4.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Theresa Webb</div>
              <div class="text-14 lh-15">Nursing Assistant</div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/5.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Cameron Williamson</div>
              <div class="text-14 lh-15">Dog Trainer</div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/6.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Courtney Henry</div>
              <div class="text-14 lh-15">Medical Assistant</div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="">
            <img src="{{asset('assets/img/team/7.png')}}" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Theresa Williamson</div>
              <div class="text-14 lh-15">Web Designer</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="section-bg layout-pt-lg layout-pb-lg">
  <div class="section-bg__item -mx-20 bg-light-2"></div>

  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Overheard from travelers</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
        </div>
      </div>
    </div>

    <div class="overflow-hidden pt-80 js-section-slider" data-gap="30" data-slider-cols="xl-3 lg-3 md-2 sm-1 base-1">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="{{asset('assets/img/avatars/1.png')}}" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="{{asset('assets/img/avatars/1.png')}}" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="{{asset('assets/img/avatars/1.png')}}" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="{{asset('assets/img/avatars/1.png')}}" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="{{asset('assets/img/avatars/1.png')}}" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row y-gap-30 items-center pt-40 sm:pt-20">
      <div class="col-xl-4">
        <div class="row y-gap-30 text-dark-1">
          <div class="col-sm-5 col-6">
            <div class="text-30 lh-15 fw-600">13m+</div>
            <div class="lh-15">Happy People</div>
          </div>

          <div class="col-sm-5 col-6">
            <div class="text-30 lh-15 fw-600">4.88</div>
            <div class="lh-15">Overall rating</div>

            <div class="d-flex x-gap-5 items-center pt-10">

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="row y-gap-30 justify-between items-center">

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="{{asset('assets/img/clients/1.svg')}}" alt="image">
            </div>
          </div>

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="{{asset('assets/img/clients/2.svg')}}" alt="image">
            </div>
          </div>

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="{{asset('assets/img/clients/3.svg')}}" alt="image">
            </div>
          </div>

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="{{asset('assets/img/clients/4.svg')}}" alt="image">
            </div>
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