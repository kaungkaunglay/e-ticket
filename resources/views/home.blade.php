@extends('includes.layout')
@section('style')

@endsection
@section('contents')


<section data-anim-wrap class="masthead -type-4">
  <div data-anim-child="slide-up" class="masthead-slider overflow-x-hidden js-masthead-slider-4">
    <div class="masthead__image">
      <img src="{{asset('assets/img/masthead/4/bg.png')}}" alt="image">
    </div>
    <div class="container">
      <div class="row justify-center">
        <div class="col-xl-9">
          <div class="masthead__content">
            <div class="text-center">
              <h1 data-anim-child="slide-up delay-2" class="text-40 lg:text-40 md:text-30 text-white">Reserve Your Table at the Finest Restaurants Today!</h1>
              <p data-anim-child="slide-up delay-3" class="text-white mt-5">Discover amzaing places at exclusive deals</p>

              <div data-anim-child="slide-up delay-4" class="d-inline-block">
                <a href="#" class="button -md -dark-1 bg-red h-50 text-white mt-30">Discover More</a>
              </div>
            </div>

            <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1 overflow-hidden rounded-22">
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
                            <button class="button -outline-blue-1 text-red size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">2</div>
                            </div>

                            <button class="button -outline-blue-1 text-red size-38 rounded-4 js-up">
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
                            <button class="button -outline-blue-1 text-red size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-red size-38 rounded-4 js-up">
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
                            <button class="button -outline-blue-1 text-red size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-red size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="button-item h-full">
                  <button class="button -dark-1 py-15 px-40 h-full col-12 rounded-0 bg-red text-white">
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
</section>

<section class="layout-pt-lg layout-pb-md home">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Discount Restaurants</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="relative pt-40 js-section-slider hidden" data-gap="30" data-slider-cols="xl-6 lg-4 md-3 sm-2 base-1">
      <div class="swiper-wrapper">

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
            </div>
          </a>

        </div>

        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{asset('assets/img/hotels/2.png')}}" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">Restaurant Name</h4>
              <div class="text-14 text-light-1">12 - Nov - 2024</div>
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

<section class="layout-pt-lg layout-pb-md">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Popular Restaurants</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
      <!-- <div class="tabs__controls row x-gap-15 justify-center js-tabs-controls">

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

      </div> -->

      <div class="tabs__content pt-40 js-tabs-content">

        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                    <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                    <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>
          </div>

          <div class="row justify-center pt-40">
            <div class="col-auto">

              <a href="{{route('restaurant-list')}}" class="button px-40 h-50 -outline-red text-red">
                View All
              </a>

            </div>
          </div>
        </div>

        <div class="tabs__pane -tab-item-2 ">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/5.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/6.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/8.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>

          <div class="row justify-center pt-40">
            <div class="col-auto">

              <a href="#" class="button px-40 h-50 -outline-red text-red">
                View All
              </a>

            </div>
          </div>
        </div>

        <div class="tabs__pane -tab-item-3 ">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/5.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/6.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/8.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>

          <div class="row justify-center pt-40">
            <div class="col-auto">

              <a href="#" class="button px-40 h-50 -outline-red text-red">
                View All
              </a>

            </div>
          </div>
        </div>

        <div class="tabs__pane -tab-item-4 ">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/5.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/6.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/8.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>

          <div class="row justify-center pt-40">
            <div class="col-auto">

              <a href="#" class="button px-40 h-50 -outline-red text-red">
                View All
              </a>

            </div>
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
          <h2 class="sectionTitle__title">Restaurant Near Your Location</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
      <!-- <div class="tabs__controls row x-gap-15 justify-center js-tabs-controls">

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

      </div> -->

      <div class="tabs__content pt-40 js-tabs-content">

        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/5.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/6.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/8.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/5.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/6.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/8.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/2.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/1.png')}}" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/3.png')}}" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/4.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/5.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/6.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-red text-white">
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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{route('restaurant-detail')}}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="{{asset('assets/img/hotels/8.png')}}" alt="image">


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
                                        <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-red">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                      Starting from <span class="text-green-2">US$72</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>

          <div class="row justify-center pt-40">
            <div class="col-auto">

              <a href="{{route('restaurant-list')}}" class="button px-40 h-50 -outline-red text-red">
                Load More
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section data-anim-wrap class="section-bg layout-pt-lg layout-pb-lg">
  <div data-anim-child="fade delay-1" class="section-bg__item -mx-20">
    <img src="{{asset('assets/img/Subscribe.jpg')}}" alt="subscribe">
  </div>

  <div class="container">
    <div data-anim-child="slide-up delay-2" class="row items-center justify-center text-center bg-sub">
      <div class="col-auto">
        <i class="icon-newsletter text-60 sm:text-40 text-white"></i>

        <h2 class="text-30 sm:text-24 lh-15 text-white mt-20">Notify New Update & Discount</h2>
        <p class="text-white mt-5">Enter your mail and send to us we will notify new update.</p>

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