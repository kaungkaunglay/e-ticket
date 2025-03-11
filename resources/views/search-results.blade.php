@extends('includes.layout')
@section('style')

@endsection
@section('contents')
<section class="pt-40 pb-40 bg-light-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h1 class="text-30 fw-600">Search Results for "{{ $query }}"</h1>
        </div>

        <div class="mainSearch -col-3-big bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
          <div class="button-grid items-center">

            <div class="searchMenu-loc pl-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

              <div data-x-dd-click="searchMenu-loc">
                <h4 class="text-15 fw-500 ls-2 lh-16">{{translate('location')}}</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input autocomplete="off" type="search" placeholder="London" class="js-search js-dd-focus" value="{{ $query }}" />
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


            <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el">

              <div data-x-dd-click="searchMenu-date">
                <h4 class="text-15 fw-500 ls-2 lh-16">{{translate('check_in')}} - {{translate('check_out')}}</h4>

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


           


            <div class="button-item">
              <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                <i class="icon-search text-20 mr-10"></i>
                {{translate('search')}}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-3 col-lg-4 lg:d-none">
        <aside class="sidebar y-gap-40">
          <!-- <div class="sidebar__item -no-border">
            <div class="flex-center ratio ratio-15:9 js-lazy" data-bg="{{asset('assets/img/general/map.png')}}">
              <button class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute" data-x-click="mapFilter">
                <i class="icon-destination text-22 mr-10"></i>
                {{translate('show_on_map')}}
              </button>
            </div>
          </div>

          <div class="sidebar__item -no-border">
            <h5 class="text-18 fw-500 mb-10">{{translate('search')}}</h5>
            <div class="single-field relative d-flex items-center py-10">
              <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="e.g. Best Western">
              <button class="absolute d-flex items-center h-full">
                <i class="icon-search text-20 px-15 text-dark-1"></i>
              </button>
            </div>
          </div> -->

          <div class="sidebar__item pb-30">
            <h5 class="text-18 fw-500 mb-10">{{translate('price')}}</h5>
            <div class="row x-gap-10 y-gap-30">
              <div class="col-12">
                <div class="js-price-rangeSlider">
                  <div class="text-14 fw-500"></div>

                  <div class="d-flex justify-between mb-20">
                    <div class="text-15 text-dark-1">
                      <span class="js-lower"></span>
                      -
                      <span class="js-upper"></span>
                    </div>
                  </div>

                  <div class="px-5">
                    <div class="js-slider"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar__item">
            <h5 class="text-18 fw-500 mb-10">{{translate('rating')}}</h5>
            <div class="row x-gap-10 y-gap-10 pt-10">

              <div class="col-auto">
                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
              </div>

              <div class="col-auto">
                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
              </div>

              <div class="col-auto">
                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
              </div>

              <div class="col-auto">
                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
              </div>

              <div class="col-auto">
                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
              </div>

            </div>
          </div>

          <div class="sidebar__item">
            <h5 class="text-18 fw-500 mb-10">{{translate('style')}}</h5>
            <div class="sidebar-checkbox">

              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">

                  <div class="d-flex items-center">
                    <div class="form-checkbox ">
                      <input type="checkbox" name="name">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">{{translate('budget')}}</div>

                  </div>

                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">92</div>
                </div>
              </div>

              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">

                  <div class="d-flex items-center">
                    <div class="form-checkbox ">
                      <input type="checkbox" name="name">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">{{translate('mid_range')}} </div>

                  </div>

                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">45</div>
                </div>
              </div>

              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">

                  <div class="d-flex items-center">
                    <div class="form-checkbox ">
                      <input type="checkbox" name="name">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">{{translate('luxury')}}</div>

                  </div>

                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">21</div>
                </div>
              </div>

              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">

                  <div class="d-flex items-center">
                    <div class="form-checkbox ">
                      <input type="checkbox" name="name">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">{{translate('family_friendly')}}</div>

                  </div>

                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">78</div>
                </div>
              </div>

              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">

                  <div class="d-flex items-center">
                    <div class="form-checkbox ">
                      <input type="checkbox" name="name">
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">{{translate('business')}}</div>

                  </div>

                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">679</div>
                </div>
              </div>

            </div>
          </div>

        </aside>
      </div>

      <div class="col-xl-9 col-lg-8">
        <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <!-- <div class="text-18"><span class="fw-500">3,269 properties</span> in Europe</div> -->
          </div>

          <div class="col-auto">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-auto">
                <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                  <i class="icon-up-down text-14 mr-10"></i>
                  {{translate('top_picks_for_your_search')}}
                </button>
              </div>

              <div class="col-auto d-none lg:d-block">
                <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                  <i class="icon-up-down text-14 mr-10"></i>
                  Filter
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
          <aside class="sidebar -mobile-filter">
            <div data-x-click="filterPopup" class="-icon-close">
              <i class="icon-close"></i>
            </div>

            <div class="sidebar__item">
              <div class="flex-center ratio ratio-15:9 js-lazy" data-bg="{{asset('assets/img/general/map.png')}}">
                <button class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute" data-x-click="mapFilter">
                  <i class="icon-destination text-22 mr-10"></i>
                  Show on map
                </button>
              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Search by property name</h5>
              <div class="single-field relative d-flex items-center py-10">
                <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="e.g. Best Western">
                <button class="absolute d-flex items-center h-full">
                  <i class="icon-search text-20 px-15 text-dark-1"></i>
                </button>
              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Deals</h5>
              <div class="sidebar-checkbox">

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">Free cancellation</div>
                    </div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">Reserve now, pay at stay </div>
                    </div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">Properties with special offers</div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
              <div class="sidebar-checkbox">

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">Breakfast Included</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">Romantic</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">Airport Transfer</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">WiFi Included </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">78</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>
                      <div class="text-15 ml-10">5 Star</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">679</div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar__item pb-30">
              <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
              <div class="row x-gap-10 y-gap-30">
                <div class="col-12">
                  <div class="js-price-rangeSlider">
                    <div class="text-14 fw-500"></div>

                    <div class="d-flex justify-between mb-20">
                      <div class="text-15 text-dark-1">
                        <span class="js-lower"></span>
                        -
                        <span class="js-upper"></span>
                      </div>
                    </div>

                    <div class="px-5">
                      <div class="js-slider"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Amenities</h5>
              <div class="sidebar-checkbox">

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Breakfast Included</div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">WiFi Included </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Pool</div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Restaurant </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">78</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Air conditioning </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">679</div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
              <div class="row y-gap-10 x-gap-10 pt-10">

                <div class="col-auto">
                  <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                </div>

                <div class="col-auto">
                  <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                </div>

                <div class="col-auto">
                  <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                </div>

                <div class="col-auto">
                  <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                </div>

                <div class="col-auto">
                  <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                </div>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
              <div class="sidebar-checkbox">

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="form-radio d-flex items-center ">
                      <div class="radio">
                        <input type="radio" name="name">
                        <div class="radio__mark">
                          <div class="radio__icon"></div>
                        </div>
                      </div>
                      <div class="ml-10">Any</div>
                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="form-radio d-flex items-center ">
                      <div class="radio">
                        <input type="radio" name="name">
                        <div class="radio__mark">
                          <div class="radio__icon"></div>
                        </div>
                      </div>
                      <div class="ml-10">Wonderful 4.5+</div>
                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="form-radio d-flex items-center ">
                      <div class="radio">
                        <input type="radio" name="name">
                        <div class="radio__mark">
                          <div class="radio__icon"></div>
                        </div>
                      </div>
                      <div class="ml-10">Very good 4+</div>
                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="form-radio d-flex items-center ">
                      <div class="radio">
                        <input type="radio" name="name">
                        <div class="radio__mark">
                          <div class="radio__icon"></div>
                        </div>
                      </div>
                      <div class="ml-10">Good 3.5+ </div>
                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">78</div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Style</h5>
              <div class="sidebar-checkbox">

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Budget</div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Mid-range </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Luxury</div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Family-friendly </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">78</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Business </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">679</div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
              <div class="sidebar-checkbox">

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Central London</div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Guests&#39; favourite area </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Westminster Borough</div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Kensington and Chelsea </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">78</div>
                  </div>
                </div>

                <div class="row items-center justify-between">
                  <div class="col-auto">

                    <div class="d-flex items-center">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Oxford Street </div>

                    </div>

                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">679</div>
                  </div>
                </div>

              </div>
            </div>
          </aside>
        </div>

        <div class="mt-30"></div>

        <div class="row y-gap-30">

        

        @foreach($restaurants as $restaurant)
          <div class="col-12">

            <div class="border-top-light pt-30">
              <div class="row x-gap-20 y-gap-20">
                <div class="col-md-auto">

                  <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12"src="{{ asset($restaurant->logo) }}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                  </div>

                </div>

                <div class="col-md">
                  <h3 class="text-18 lh-16 fw-500">
                  {{ $restaurant->name }}<br class="lg:d-none">   {{ $restaurant->city }}

                    <div class="d-inline-block ml-10">
                      <i class="icon-star text-10 text-yellow-2"></i>
                      <i class="icon-star text-10 text-yellow-2"></i>
                      <i class="icon-star text-10 text-yellow-2"></i>
                      <i class="icon-star text-10 text-yellow-2"></i>
                      <i class="icon-star text-10 text-yellow-2"></i>
                    </div>
                  </h3>

                  <div class="row x-gap-10 y-gap-10 items-center pt-10">
                    <div class="col-auto">
                      <p class="text-14">{{ $restaurant->address }}</p>
                    </div>

                    <div class="col-auto">
                      <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                    </div>


                  
                  </div>

                

                  <div class="text-14 text-green-2 lh-15 mt-10">
                    <div class="fw-500">Free cancellation</div>
                    <div class="">You can cancel later, so lock in this great price today.</div>
                  </div>

                  <div class="row x-gap-10 y-gap-10 pt-20">

                    <div class="col-auto">
                      <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                    </div>

                    <div class="col-auto">
                      <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                    </div>

                    <div class="col-auto">
                      <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                    </div>

                    <div class="col-auto">
                      <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                    </div>

                  </div>
                </div>

                <div class="col-md-auto text-right md:text-left">
                 

                  <div class="">
                    
                    <div class="text-22 lh-12 fw-600 mt-5">US{{ $restaurant->price_range }}</div>
               

                    <a  href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                      {{translate('see_availability')}} <div class="icon-arrow-top-right ml-15"></div>
                    </a>

                  </div>
                </div>
              </div>
            </div>

          </div>
          @endforeach
        </div>

        <div class="border-top-light mt-30 pt-30">
          <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
            <div class="col-auto md:order-1">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-left text-12"></i>
              </button>
            </div>

            <div class="col-md-auto md:order-3">
              <div class="row x-gap-20 y-gap-20 items-center md:d-none">

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

              <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">1</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">3</div>

                </div>

              </div>

              <div class="text-center mt-30 md:mt-10">
                <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
              </div>
            </div>

            <div class="col-auto md:order-2">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-right text-12"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('includes.subscribe')

@endsection