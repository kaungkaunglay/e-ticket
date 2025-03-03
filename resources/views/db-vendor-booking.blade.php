<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">

  <title>GoTrip</title>
</head>

<body data-barba="wrapper">


  <div class="preloader js-preloader">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
           
          </g>

          <defs>
            <clipPath id="clip0_1_41">
              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class="preloader__title">GoTrip</div>
  </div>


  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="index.html" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
          <img src="img/general/logo-dark.svg" alt="logo icon">
          <img src="img/general/logo-dark.svg" alt="logo icon">
        </a>
      </div>

      <div class="row justify-between items-center pl-60 lg:pl-20">
        <div class="col-auto">
          <div class="d-flex items-center">
            <button data-x-click="dashboard">
              <i class="icon-menu-2 text-20"></i>
            </button>

            <div class="single-field relative d-flex items-center md:d-none ml-30">
              <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
              <button class="absolute d-flex items-center h-full">
                <i class="icon-search text-20 px-15 text-dark-1"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex items-center">

            <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
              <div class="mobile-overlay"></div>

              <div class="header-menu__content">
                <div class="mobile-bg js-mobile-bg"></div>

                <div class="menu js-navList">
                  <ul class="menu__nav text-dark-1 fw-500 -is-active">

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
                                  <img src="#" data-src="img/backgrounds/7.png" alt="image" class="rounded-4 js-lazy">

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
                                  <img src="img/backgrounds/7.png" alt="image" class="rounded-4">

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
                                  <img src="img/backgrounds/7.png" alt="image" class="rounded-4">

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
                                  <img src="img/backgrounds/7.png" alt="image" class="rounded-4">

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
                                  <img src="img/backgrounds/7.png" alt="image" class="rounded-4">

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
                                  <img src="img/backgrounds/7.png" alt="image" class="rounded-4">

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
                                  <img src="img/backgrounds/7.png" alt="image" class="rounded-4">

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
              <img src="img/avatars/3.png" alt="image" class="size-50 rounded-22 object-cover">
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

        <div class="sidebar__item ">


          <a href="db-dashboard.html" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
            <img src="img/dashboard/sidebar/compass.svg" alt="image" class="mr-15">
            Dashboard
          </a>


        </div>

        <div class="sidebar__item ">


          <a href="#" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
            <img src="img/dashboard/sidebar/booking.svg" alt="image" class="mr-15">
            Booking Manager
          </a>


        </div>

        <div class="sidebar__item ">


          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <img src="img/dashboard/sidebar/hotel.svg" alt="image" class="mr-10">
                    Manage Hotel
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


          <a href="#" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
            <img src="img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
            Logout
          </a>


        </div>

      </div>

    </div>

    <div class="dashboard__main">
      <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Booking History</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

          </div>

          <div class="col-auto">

            <div class="row x-gap-20 y-gap-20 items-center">
              <div class="col-auto">
                <div class="w-230 single-field relative d-flex items-center">

                  <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" class="date-input bg-white text-dark-1 h-50 rounded-8 pl-45">

                  <button class="absolute d-flex items-center h-full pointer-events-none">
                    <i class="icon-calendar text-20 px-15 text-dark-1"></i>
                  </button>
                </div>
              </div>

              <div class="col-auto">

                <div class="dropdown js-dropdown js-services-active">
                  <div class="dropdown__button d-flex items-center justify-between bg-white rounded-4 w-230 text-14 px-20 h-50 text-14" data-el-toggle=".js-services-toggle" data-el-toggle-active=".js-services-active">
                    <span class="js-dropdown-title">Services</span>
                    <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                  </div>

                  <div class="toggle-element -dropdown  js-click-dropdown js-services-toggle">
                    <div class="text-14 y-gap-15 js-dropdown-list">

                      <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                      <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                      <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                      <div><a href="#" class="d-block js-dropdown-link">Lifestyle</a></div>

                      <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                    </div>
                  </div>
                </div>

              </div>

              <div class="col-auto">
                <div class="w-230 single-field relative d-flex items-center">
                  <input class="pl-50 bg-white text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
                  <button class="absolute d-flex items-center h-full">
                    <i class="icon-search text-20 px-15 text-dark-1"></i>
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Booking</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-2">Completed</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-3">Processing</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-4">Confirmed</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-5">Cancelled</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-6">Paid</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-7">Unpaid</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-8">Partial Payment</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-2 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-3 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-4 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-5 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-6 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-7 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-8 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Order Date</th>
                        <th>Execution Time</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">Rejected</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                      <tr>
                        <td>Hotel</td>
                        <td>The May Fair Hotel</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td class="fw-500">$130</td>
                        <td>$0</td>
                        <td>$35</td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                        <td>Actions</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>

          <div class="pt-30">
            <div class="row justify-between">
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
            </div>
          </div>
        </div>


        <footer class="footer -dashboard mt-60">
          <div class="footer__row row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div class="row y-gap-20 items-center">
                <div class="col-auto">
                  <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
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
  <script src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>

  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/gotrip-html/db-vendor-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 09:19:38 GMT -->
</html>