@extends('includes.layout')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/category.css') }}" />
@endsection
@section('contents')
<section data-anim-wrap class="masthead -type-4">
      <div data-anim-child="slide-up" class="masthead-slider overflow-x-hidden js-masthead-slider-4">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="masthead__image">
              <img src="{{asset('assets/img/masthead/4/bg.png')}}" alt="image">
            </div>

            <div class="container">
              <div class="row justify-center">
                <div class="col-xl-9">
                  <div class="masthead__content">
                    <div class="text-center">
                      <h1 data-anim-child="slide-up delay-2" class="text-60 lg:text-40 md:text-30 text-white">Find Your Dream Luxury Hotel</h1>
                      <p data-anim-child="slide-up delay-3" class="text-white mt-5">Discover amzaing places at exclusive deals</p>

                      <div data-anim-child="slide-up delay-4" class="d-inline-block">
                        <a href="#" class="button -md -outline-white h-50 text-white mt-30">Discover More</a>
                      </div>
                    </div>

                    <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1">
                      <div class="button-grid">

                        <div class="searchMenu-loc py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-liverSearch">

                          <div data-x-dd-click="searchMenu-loc">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
                            </div>
                          </div>


                          <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                              <div class="y-gap-5 js-results">

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="searchMenu-date py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-calendar js-calendar-el">

                          <div data-x-dd-click="searchMenu-date">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                              <span class="js-first-date">Wed 2 Mar</span>
                              -
                              <span class="js-last-date">Fri 11 Apr</span>
                            </div>
                          </div>


                          <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="elCalendar js-calendar-el-calendar"></div>
                            </div>
                          </div>
                        </div>


                        <div class="searchMenu-guests py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-form-counters">

                          <div data-x-dd-click="searchMenu-guests">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <span class="js-count-adult">2</span> adults
                              -
                              <span class="js-count-child">1</span> childeren
                              -
                              <span class="js-count-room">1</span> room
                            </div>
                          </div>


                          <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Adults</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">2</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 lh-12 fw-500">Children</div>
                                  <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Rooms</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="button-item h-full">
                          <button class="button -dark-1 py-15 px-40 h-full col-12 rounded-0 bg-blue-1 text-white">
                            <i class="icon-search text-20 mr-10"></i>
                            Search
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="masthead__image">
              <img src="{{asset('assets/img/masthead/4/bg.png')}}" alt="image">
            </div>

            <div class="container">
              <div class="row justify-center">
                <div class="col-xl-9">
                  <div class="masthead__content">
                    <div class="text-center">
                      <h1 data-anim-child="slide-up delay-2" class="text-60 lg:text-40 md:text-30 text-white">Find Your Dream Luxury Hotel</h1>
                      <p data-anim-child="slide-up delay-3" class="text-white mt-5">Discover amzaing places at exclusive deals</p>

                      <div data-anim-child="slide-up delay-4" class="d-inline-block">
                        <a href="#" class="button -md -outline-white h-50 text-white mt-30">Discover More</a>
                      </div>
                    </div>

                    <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1">
                      <div class="button-grid">

                        <div class="searchMenu-loc py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-liverSearch">

                          <div data-x-dd-click="searchMenu-loc">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
                            </div>
                          </div>


                          <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                              <div class="y-gap-5 js-results">

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="searchMenu-date py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-calendar js-calendar-el">

                          <div data-x-dd-click="searchMenu-date">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                              <span class="js-first-date">Wed 2 Mar</span>
                              -
                              <span class="js-last-date">Fri 11 Apr</span>
                            </div>
                          </div>


                          <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="elCalendar js-calendar-el-calendar"></div>
                            </div>
                          </div>
                        </div>


                        <div class="searchMenu-guests py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-form-counters">

                          <div data-x-dd-click="searchMenu-guests">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <span class="js-count-adult">2</span> adults
                              -
                              <span class="js-count-child">1</span> childeren
                              -
                              <span class="js-count-room">1</span> room
                            </div>
                          </div>


                          <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Adults</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">2</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 lh-12 fw-500">Children</div>
                                  <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Rooms</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="button-item h-full">
                          <button class="button -dark-1 py-15 px-40 h-full col-12 rounded-0 bg-blue-1 text-white">
                            <i class="icon-search text-20 mr-10"></i>
                            Search
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="masthead__image">
              <img src="{{asset('assets/img/masthead/4/bg.png')}}" alt="image">
            </div>

            <div class="container">
              <div class="row justify-center">
                <div class="col-xl-9">
                  <div class="masthead__content">
                    <div class="text-center">
                      <h1 data-anim-child="slide-up delay-2" class="text-60 lg:text-40 md:text-30 text-white">Find Your Dream Luxury Hotel</h1>
                      <p data-anim-child="slide-up delay-3" class="text-white mt-5">Discover amzaing places at exclusive deals</p>

                      <div data-anim-child="slide-up delay-4" class="d-inline-block">
                        <a href="#" class="button -md -outline-white h-50 text-white mt-30">Discover More</a>
                      </div>
                    </div>

                    <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1">
                      <div class="button-grid">

                        <div class="searchMenu-loc py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-liverSearch">

                          <div data-x-dd-click="searchMenu-loc">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
                            </div>
                          </div>


                          <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                              <div class="y-gap-5 js-results">

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="searchMenu-date py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-calendar js-calendar-el">

                          <div data-x-dd-click="searchMenu-date">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                              <span class="js-first-date">Wed 2 Mar</span>
                              -
                              <span class="js-last-date">Fri 11 Apr</span>
                            </div>
                          </div>


                          <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="elCalendar js-calendar-el-calendar"></div>
                            </div>
                          </div>
                        </div>


                        <div class="searchMenu-guests py-24 px-30 sm:py-15 sm:px-20 js-form-dd js-form-counters">

                          <div data-x-dd-click="searchMenu-guests">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <span class="js-count-adult">2</span> adults
                              -
                              <span class="js-count-child">1</span> childeren
                              -
                              <span class="js-count-room">1</span> room
                            </div>
                          </div>


                          <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Adults</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">2</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 lh-12 fw-500">Children</div>
                                  <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Rooms</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="button-item h-full">
                          <button class="button -dark-1 py-15 px-40 h-full col-12 rounded-0 bg-blue-1 text-white">
                            <i class="icon-search text-20 mr-10"></i>
                            Search
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="masthead-slider__nav -prev js-prev">
          <button class="button -outline-white size-50 flex-center text-white rounded-full">
            <i class="icon-arrow-left"></i>
          </button>
        </div>

        <div class="masthead-slider__nav -next js-next">
          <button class="button -outline-white size-50 flex-center text-white rounded-full">
            <i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>

      <div class="masthead__scroll">
        <div class="text-14 text-white">Scroll Now</div>
        <div class="-line"></div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Destinations Travellers Love</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="relative pt-40 js-section-slider" data-gap="30" data-slider-cols="xl-6 lg-4 md-3 sm-2 base-1">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">London, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Edinburgh, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Manchester, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Liverpool, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Birmingham, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Glasgow, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Manchester, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Liverpool, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Birmingham, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-1:1">
                  <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/destinations/3/1.png')}}" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Glasgow, UK</h4>
                  <div class="text-14 text-light-1">4,090 properties</div>
                </div>
              </a>

            </div>

          </div>


          <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
            <i class="icon icon-chevron-left text-12"></i>
          </button>

          <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
            <i class="icon icon-chevron-right text-12"></i>
          </button>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Popular Hotels</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
          <div class="tabs__controls row x-gap-15 justify-center js-tabs-controls">

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">New York</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-2">London</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-3">Paris</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-4">Istanbul</button>
            </div>

          </div>

          <div class="tabs__content pt-40 js-tabs-content">

            <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <div class="row y-gap-30">

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                              </div>

                            </div>

                            <div class="cardImage-slider__pagination js-pagination"></div>

                            <div class="cardImage-slider__nav -prev">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                <i class="icon-chevron-left text-10"></i>
                              </button>
                            </div>

                            <div class="cardImage-slider__nav -next">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                <i class="icon-chevron-right text-10"></i>
                              </button>
                            </div>
                          </div>

                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-brown-1 text-white">
                            -25% today
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>

              <div class="row justify-center pt-40">
                <div class="col-auto">

                  <a href="#" class="button px-40 h-50 -outline-blue-1 text-blue-1">
                    View All <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>

            <div class="tabs__pane -tab-item-2 ">
              <div class="row y-gap-30">

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                            </div>

                            <div class="cardImage-slider__pagination js-pagination"></div>

                            <div class="cardImage-slider__nav -prev">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                <i class="icon-chevron-left text-10"></i>
                              </button>
                            </div>

                            <div class="cardImage-slider__nav -next">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                <i class="icon-chevron-right text-10"></i>
                              </button>
                            </div>
                          </div>

                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-brown-1 text-white">
                            -25% today
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>

              <div class="row justify-center pt-40">
                <div class="col-auto">

                  <a href="#" class="button px-40 h-50 -outline-blue-1 text-blue-1">
                    View All <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>

            <div class="tabs__pane -tab-item-3 ">
              <div class="row y-gap-30">

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                            </div>

                            <div class="cardImage-slider__pagination js-pagination"></div>

                            <div class="cardImage-slider__nav -prev">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                <i class="icon-chevron-left text-10"></i>
                              </button>
                            </div>

                            <div class="cardImage-slider__nav -next">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                <i class="icon-chevron-right text-10"></i>
                              </button>
                            </div>
                          </div>

                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-brown-1 text-white">
                            -25% today
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>

              <div class="row justify-center pt-40">
                <div class="col-auto">

                  <a href="#" class="button px-40 h-50 -outline-blue-1 text-blue-1">
                    View All <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>

            <div class="tabs__pane -tab-item-4 ">
              <div class="row y-gap-30">

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                              </div>

                            </div>

                            <div class="cardImage-slider__pagination js-pagination"></div>

                            <div class="cardImage-slider__nav -prev">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                <i class="icon-chevron-left text-10"></i>
                              </button>
                            </div>

                            <div class="cardImage-slider__nav -next">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                <i class="icon-chevron-right text-10"></i>
                              </button>
                            </div>
                          </div>

                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-brown-1 text-white">
                            -25% today
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>

              <div class="row justify-center pt-40">
                <div class="col-auto">

                  <a href="#" class="button px-40 h-50 -outline-blue-1 text-blue-1">
                    View All <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="section-bg layout-pt-xl layout-pb-xl">
      <div data-anim="fade delay-1" class="section-bg__item -mx-20" data-parallax="0.7">
        <div data-parallax-target>
          <img src="{{asset('assets/img/hotels/7.png')}}" alt="image">
        </div>
      </div>

      <div class="container">
        <div data-anim="fade delay-3" class="row justify-center text-center">
          <div class="col-auto">
            <div class="text-white mb-10">Happy Holiday</div>
            <h2 class="text-40 text-white">Get Amazing Rates at Hotels Worldwide</h2>

            <div class="d-inline-block mt-30">
              <a href="#" class="button -md -blue-1 bg-white text-dark-1">Find Deals</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-50 pb-40 border-bottom-light">
      <div data-anim="slide-up delay-1" class="container">
        <div class="row justify-center text-center">

          <div class="col-xl-3 col-sm-6">
            <div class="text-40 lh-13 text-dark-1 fw-600">4,958</div>
            <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
          </div>

          <div class="col-xl-3 col-sm-6">
            <div class="text-40 lh-13 text-dark-1 fw-600">2,869</div>
            <div class="text-14 lh-14 text-light-1 mt-5">Total Properties</div>
          </div>

          <div class="col-xl-3 col-sm-6">
            <div class="text-40 lh-13 text-dark-1 fw-600">2M</div>
            <div class="text-14 lh-14 text-light-1 mt-5">Happy customers</div>
          </div>

          <div class="col-xl-3 col-sm-6">
            <div class="text-40 lh-13 text-dark-1 fw-600">574,974</div>
            <div class="text-14 lh-14 text-light-1 mt-5">Our Volunteers</div>
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
                <img src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image" class="js-lazy">
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
                <img src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image" class="js-lazy">
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
                <img src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image" class="js-lazy">
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

    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">GoTrip Choice of Hotels</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-3" class="relative pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev" data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                        Breakfast included
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Montcalm At Brewery London City</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                          </div>

                        </div>

                        <div class="cardImage-slider__pagination js-pagination"></div>

                        <div class="cardImage-slider__nav -prev">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                            <i class="icon-chevron-left text-10"></i>
                          </button>
                        </div>

                        <div class="cardImage-slider__nav -next">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                            <i class="icon-chevron-right text-10"></i>
                          </button>
                        </div>
                      </div>

                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>Staycity Aparthotels Deptford Bridge Station</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                        Best Seller
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Westin New York at Times Square</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/7.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                        Top Rated
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>


          <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
            <i class="icon icon-chevron-left text-12"></i>
          </button>

          <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
            <i class="icon icon-chevron-right text-12"></i>
          </button>

        </div>
      </div>
    </section>

    <section class="section-bg layout-pt-lg layout-pb-lg">
      <div class="section-bg__item -mx-20 bg-light-2"></div>

      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Overheard from travelers</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="relative mt-80 md:mt-40 js-section-slider" data-gap="30" data-slider-cols="xl-3 lg-3 md-2 sm-1 base-1">
          <div class="swiper-wrapper">

            <div data-anim-child="slide-up delay-2" class="swiper-slide">
              <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
                <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                <div class="pt-20 mt-28 border-top-light">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <img class="size-60" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                    </div>

                    <div class="col-auto">
                      <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                      <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div data-anim-child="slide-up delay-3" class="swiper-slide">
              <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
                <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                <div class="pt-20 mt-28 border-top-light">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <img class="size-60" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                    </div>

                    <div class="col-auto">
                      <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                      <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div data-anim-child="slide-up delay-4" class="swiper-slide">
              <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
                <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                <div class="pt-20 mt-28 border-top-light">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <img class="size-60" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                    </div>

                    <div class="col-auto">
                      <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                      <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div data-anim-child="slide-up delay-5" class="swiper-slide">
              <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
                <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                <div class="pt-20 mt-28 border-top-light">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <img class="size-60" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                    </div>

                    <div class="col-auto">
                      <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                      <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div data-anim-child="slide-up delay-6" class="swiper-slide">
              <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
                <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                <div class="pt-20 mt-28 border-top-light">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <img class="size-60" src="{{asset('assets/img/hotels/7.png')}}" alt="image">
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


          <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
            <i class="icon icon-chevron-left text-12"></i>
          </button>

          <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
            <i class="icon icon-chevron-right text-12"></i>
          </button>

        </div>

        <div data-anim-child="fade delay-6" class="row y-gap-30 items-center pt-40 sm:pt-20">
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
                  <img src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                </div>
              </div>

              <div class="col-md-auto col-sm-6">
                <div class="d-flex justify-center">
                  <img src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                </div>
              </div>

              <div class="col-md-auto col-sm-6">
                <div class="d-flex justify-center">
                  <img src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                </div>
              </div>

              <div class="col-md-auto col-sm-6">
                <div class="d-flex justify-center">
                  <img src="{{asset('assets/img/hotels/7.png')}}" alt="image">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40">

          <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

            <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
              <div class="blogCard__image">
                <div class="ratio ratio-1:1 rounded-4">
                  <img class="img-ratio js-lazy" src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image">
                </div>
              </div>

              <div class="px-20 py-20">
                <h4 class="text-dark-1 text-16 lh-18 fw-500">10 European ski destinations you should visit this winter</h4>
                <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

            <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
              <div class="blogCard__image">
                <div class="ratio ratio-1:1 rounded-4">
                  <img class="img-ratio js-lazy" src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image">
                </div>
              </div>

              <div class="px-20 py-20">
                <h4 class="text-dark-1 text-16 lh-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">

            <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
              <div class="blogCard__image">
                <div class="ratio ratio-1:1 rounded-4">
                  <img class="img-ratio js-lazy" src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image">
                </div>
              </div>

              <div class="px-20 py-20">
                <h4 class="text-dark-1 text-16 lh-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-5" class="col-lg-3 col-sm-6">

            <a href="#" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
              <div class="blogCard__image">
                <div class="ratio ratio-1:1 rounded-4">
                  <img class="img-ratio js-lazy" src="#" data-src="{{asset('assets/img/destinations/3/1.png')}}" alt="image">
                </div>
              </div>

              <div class="px-20 py-20">
                <h4 class="text-dark-1 text-16 lh-18 fw-500">The best times & places to see the Northern Lights in Iceland</h4>
                <div class="text-light-1 text-15 lh-14 mt-10">April 06, 2022</div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section data-anim-wrap class="section-bg layout-pt-lg layout-pb-lg">
      <div data-anim-child="fade delay-1" class="section-bg__item -mx-20 bg-blue-1"></div>

      <div class="container">
        <div data-anim-child="slide-up delay-2" class="row items-center justify-center text-center">
          <div class="col-auto">
            <i class="icon-newsletter text-60 sm:text-40 text-white"></i>

            <h2 class="text-30 sm:text-24 lh-15 text-white mt-20">Your Travel Journey Starts Here</h2>
            <p class="text-white mt-5">Sign up and we'll send the best deals to you</p>

            <div class="single-field -w-410 d-flex x-gap-10 flex-wrap y-gap-20 pt-30">
              <div class="col-auto">
                <input class="col-12 bg-white h-60" type="text" placeholder="Your Email">
              </div>
              <div class="col-auto">
                <button class="button -md -white h-60 bg-dark-1 text-white">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection