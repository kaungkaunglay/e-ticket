@extends('includes.layout')
@section('style')

@endsection
@section('contents')




<section class="section-bg layout-pt-lg layout-pb-lg">
  <div class="section-bg__item col-12">
    <img src="{{asset('assets/img/pages/about/1.png')}}" alt="image">
  </div>

  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-xl-6 col-lg-8 col-md-10">
        <h1 class="text-40 md:text-25 fw-600 text-white">About Us</h1>
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

    <div class="row y-gap-40 justify-center pt-50">

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

<section class="layout-pt-md layout-pb-md">
  <div class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div class="col-lg-5">
        <h2 class="text-30 fw-600">About Restaurant-Booking.Com</h2>
        <p class="mt-5">The popular restaurant near your location</p>

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