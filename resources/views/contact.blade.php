@extends('includes.layout')
@section('style')
  <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection
@section('contents')


  <section data-anim="fade" class="d-flex items-center py-15 border-top-light border-bottom-light">
    <div class="px-30">
    <div class="row y-gap-10 items-center justify-between">
      <div class="col-auto">
      <div class="row px-10 y-gap-5 items-center text-14 text-light-1">
        <div class="col-auto">
        <div class="">Home</div>
        </div>
        <div class="col-auto">
        <div class="">&gt;</div>
        </div>
        <div class="col-auto">
        <div class="">Restaurant location city</div>
        </div>
        <div class="col-auto">
        <div class="">&gt;</div>
        </div>
        <div class="col-auto">
        <div class="text-dark-1">Restaurant name</div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>

  <section>
    <div class="relative container">
    <div class="row justify-center">
      <div class="col-xl-5 col-lg-7">
      <div class="text-22 fw-500 text-center py-20">
        How Can I Help You
      </div>

      <div class="row y-gap-20">
        <div class="col-12">

          <div class="form-select">
            <div class="d-flex">
              <input type="button" value="How to booking a restaurant?">
              <span for="lh-1 text-16 text-light-1"></span>
            </div>
            <div class="select-dropdown">
              <ul>
                <li><a href="#">Item1</a></li>
                <li><a href="#">Item2</a></li>
                <li><a href="#">Item3</a></li>
              </ul>
            </div>

          </div>

        </div>
        <div class="col-12">

          <div class="form-select">
            <div class="d-flex">
              <input type="button" value="How to booking a restaurant?">
              <span for="lh-1 text-16 text-light-1"></span>
            </div>
            <div class="select-dropdown">
              <ul>
                <li><a href="#">Item1</a></li>
                <li><a href="#">Item2</a></li>
                <li><a href="#">Item3</a></li>
              </ul>
            </div>

          </div>

        </div>

        <div class="col-12">

          <div class="form-select">
            <div class="d-flex">
              <input type="button" value="How to booking a restaurant?">
              <span for="lh-1 text-16 text-light-1"></span>
            </div>
            <div class="select-dropdown">
              <ul>
                <li><a href="#">Item1</a></li>
                <li><a href="#">Item2</a></li>
                <li><a href="#">Item3</a></li>
              </ul>
            </div>

          </div>

        </div>

        <div class="col-12">

        <div class="form-select">
          <div class="d-flex">
            <input type="button" value="How to booking a restaurant?">
            <span for="lh-1 text-16 text-light-1"></span>
          </div>
          <div class="select-dropdown">
          <ul>
            <li><a href="#">Item1</a></li>
            <li><a href="#">Item2</a></li>
            <li><a href="#">Item3</a></li>
          </ul>
          </div>
        </div>

        </div>
      </div>
      </div>
    </div>
  </section>

  <section>
    <div class="relative container">
    <div class="row justify-center">
      <div class="col-xl-5 col-lg-7">
      <div class="text-22 fw-500 text-center py-20">
        Contact Us
      </div>

      <div class="row y-gap-20">
        <div class="col-12">

        <div class="form-input ">
          <input type="text" required>
          <label class="lh-1 text-16 text-light-1">Name</label>
        </div>

        </div>
        <div class="col-12">

        <div class="form-input ">
          <input type="text" required>
          <label class="lh-1 text-16 text-light-1">Email</label>
        </div>

        </div>
        <div class="col-12">

        <div class="form-input ">
          <textarea required rows="4"></textarea>
          <label class="lh-1 text-16 text-light-1">Description</label>
        </div>

        </div>
        <div class="col-12 ms-0 row">

        <a href="#" class="button h-50 col-auto -dark-1 bg-red text-white mx-auto">
          Send a Messsage
        </a>

        </div>
      </div>

      </div>
    </div>
    </div>
  </section>

  <!-- <section class="layout-pt-md layout-pb-lg">
    <div class="container">
      <div class="row x-gap-80 y-gap-20 justify-between">
      <div class="col-12">
      <div class="text-30 sm:text-24 fw-600">Contact Us</div>
      </div>

      <div class="col-lg-3">
      <div class="text-14 text-light-1">Address</div>
      <div class="text-18 fw-500 mt-10">328 Queensberry Street, North Melbourne VIC 3051, Australia.</div>
      </div>

      <div class="col-auto">
      <div class="text-14 text-light-1">Toll Free Customer Care</div>
      <div class="text-18 fw-500 mt-10">+(1) 123 456 7890</div>
      </div>

      <div class="col-auto">
      <div class="text-14 text-light-1">Need live support?</div>
      <div class="text-18 fw-500 mt-10">hi@gotrip.com</div>
      </div>

      <div class="col-auto">
      <div class="text-14 text-light-1">Follow us on social media</div>
      <div class="d-flex x-gap-20 items-center mt-10">
      <a href="#"><i class="icon-facebook text-14"></i></a>
      <a href="#"><i class="icon-twitter text-14"></i></a>
      <a href="#"><i class="icon-instagram text-14"></i></a>
      <a href="#"><i class="icon-linkedin text-14"></i></a>
      </div>
      </div>
      </div>
    </div>
    </section> -->

  <!-- <section class="layout-pt-lg layout-pb-lg bg-blue-2">
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
      <img src="#" data-src="img/featureIcons/1/1.svg" alt="image" class="js-lazy">
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
      <img src="#" data-src="img/featureIcons/1/2.svg" alt="image" class="js-lazy">
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
      <img src="#" data-src="img/featureIcons/1/3.svg" alt="image" class="js-lazy">
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
    </section> -->


@endsection