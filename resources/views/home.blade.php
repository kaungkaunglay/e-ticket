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
              <h1 data-anim-child="slide-up delay-2" class="text-40 lg:text-40 md:text-30 text-white">{{translate('reserve_table')}}</h1>

              <div data-anim-child="slide-up delay-4" class="d-inline-block">
                <a href="#" class="button -md -dark-1 bg-red h-50 text-white mt-30">{{translate('discover_more')}}</a>
              </div>
            </div>
            <form action="{{ route('restaurant.search') }}" method="GET">
    <div class="mainSearch bg-white rounded-4 shadow-1 overflow-hidden rounded-22">
        <div class="button-grid">
           
            <div class="searchMenu-loc py-24 px-30 sm:py-15 sm:px-20 js-form-dd">
                <div data-x-dd-click="searchMenu-loc">
                    <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('location') }}</h4>
                    <input name="city" type="search" placeholder="{{ translate('where_are_you_going') }}" class="js-search">
                </div>
            </div>

       
            <div class="searchMenu-date py-24 px-30 sm:py-15 sm:px-20 js-form-dd">
                <div data-x-dd-click="searchMenu-date">
                    <h4 class="text-15 fw-500 ls-2 lh-16">{{ translate('check_in') }} - {{ translate('check_out') }}</h4>
                    <input type="text" id="date-range" class="capitalize text-15 text-light-1 ls-2 lh-16" placeholder="Select Dates">
                    <input type="hidden" name="check_in" id="check_in">
                    <input type="hidden" name="check_out" id="check_out">
                </div>
            </div>

           
            <div class="button-item h-full">
                <button type="submit" class="button -dark-1 py-15 px-40 h-full col-12 rounded-0 bg-red text-white">
                    <i class="icon-search text-20 mr-10"></i> {{ translate('search') }}
                </button>
            </div>
        </div>
    </div>
</form>

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
          <h2 class="sectionTitle__title">{{translate('discount_restaurants')}}</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="relative pt-40 js-section-slider hidden" data-gap="30" data-slider-cols="xl-6 lg-4 md-3 sm-2 base-1">
      <div class="swiper-wrapper">

      @foreach($discountedRestaurants as $restaurant)
        <div class="swiper-slide">

          <a href="#" class="citiesCard -type-2 ">
            <div class="citiesCard__image rounded-4 ratio ratio-1:1">
              <img class="img-ratio rounded-4 js-lazy" data-src="{{ asset($restaurant->logo) }}" src="{{ asset($restaurant->logo) }}"  alt="image">
            </div>

            <div class="citiesCard__content mt-10">
              <h4 class="text-18 lh-13 fw-500 text-dark-1">{{ $restaurant->name }}</h4>
              <div class="text-14 text-light-1">{{ $restaurant->created_at->format('d - M - Y') }}</div>
            </div>
          </a>

        </div>
        @endforeach
       

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
          <h2 class="sectionTitle__title">{{translate('popular_restaurants')}}</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
      
      <div class="tabs__content pt-40 js-tabs-content">

        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-list')}}" class="button px-40 h-50 -outline-red text-red">
              {{translate('view_all')}}
              </a>

            </div>
          </div>
        </div>

        <div class="tabs__pane -tab-item-2 ">
          <div class="row y-gap-30">

            <div class="col-xl-3 col-lg-3 col-sm-6">

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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

              <a href="{{locale_route('restaurant-detail')}}" class="hotelsCard -type-1 ">
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
          <h2 class="sectionTitle__title">{{ translate('restaurant_near_location') }}</h2>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-2 pt-40 js-tabs">
      <div class="tabs__content pt-40 js-tabs-content">
        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

           
            @foreach($restaurants as $restaurant)
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <a href="{{ locale_route('restaurant-detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1">
                <div class="hotelsCard__image">
                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">
                  
                      <img class="rounded-4 col-12" 
                           src="{{ asset('' . $restaurant->logo) }}" 
                           alt="{{ $restaurant->name }} logo">
                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="hotelsCard__content mt-10">
                 
                <a href="{{ route('restaurant.detail', ['id' => $restaurant->id]) }}" class="hotelsCard -type-1">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                      <span>{{ $restaurant->name }}</span>
                  </h4>
              </a>

                 
                  <p class="text-light-1 lh-14 text-14 mt-5">Available: {{ $restaurant->available }} Rooms</p>

                  <div class="mt-5">
                    <div class="fw-500 d-flex justify-content-between">
                    
                      Starting from <span class="text-green-2">${{ $restaurant->price_range }}</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
          

          </div>

         
          <div class="row justify-center pt-40">
            <div class="col-auto">
              <a href="{{ locale_route('restaurant-list') }}" class="button px-40 h-50 -outline-red text-red">
                {{ translate('load_more') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('includes.subscribe')

@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#date-range", {
        mode: "range",
        dateFormat: "Y-m-d",
        onClose: function(selectedDates) {
            if (selectedDates.length === 2) {
                document.getElementById("check_in").value = flatpickr.formatDate(selectedDates[0], "Y-m-d");
                document.getElementById("check_out").value = flatpickr.formatDate(selectedDates[1], "Y-m-d");
            }
        }
    });
});
</script>
