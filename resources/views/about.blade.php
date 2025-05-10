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
        <h1 class="text-40 md:text-25 fw-600 text-white">{{translate('about_us')}}</h1>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-lg layout-pb-md">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">{{translate('why_choose_us')}}</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">{{translate('popular_destinations_offer')}}</p>
        </div>
      </div>
    </div>

    <div class="row y-gap-40 justify-between pt-50">

      <div  class="col-lg-3 col-sm-6 m-auto">

        <div class="featureIcon -type-1 ">
          <div class="d-flex justify-center">
            <img src="#" data-src="{{asset('assets/img/featureIcons/1/1.svg')}}" alt="image" class="js-lazy">
          </div>

          <div class="text-center mt-30">
            <h4 class="text-18 fw-500">{{translate('best_price_guarantee')}}</h4>
            <p class="text-15 mt-10">ロレム・イプサムは単なるダミーテキストです。</p>
          </div>
        </div>

      </div>

      <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6 m-auto">

        <div class="featureIcon -type-1 ">
          <div class="d-flex justify-center">
            <img src="#" data-src="{{asset('assets/img/featureIcons/1/2.svg')}}" alt="image" class="js-lazy">
          </div>

          <div class="text-center mt-30">
            <h4 class="text-18 fw-500">{{translate('easy_quick_booking')}}</h4>
            <p class="text-15 mt-10">ロレム・イプサムは単なるダミーテキストです。</p>
          </div>
        </div>

      </div>

      <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6 m-auto">

        <div class="featureIcon -type-1 ">
          <div class="d-flex justify-center">
            <img src="#" data-src="{{asset('assets/img/featureIcons/1/3.svg')}}" alt="image" class="js-lazy">
          </div>

          <div class="text-center mt-30">
            <h4 class="text-18 fw-500">{{translate('customer_care_24_7')}}</h4>
            <p class="text-15 mt-10">ロレム・イプサムは単なるダミーテキストです。</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-md">
  <div data-anim-wrap class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div data-anim-child="slide-up delay-1" class="col-lg-5">
        <h2 class="text-30 fw-600">{{translate('about_r_buzz')}}</h2>
        <p class="mt-5">{{translate('restaurant_near')}}</p>

        <p class="text-dark-1 mt-60 lg:mt-40 md:mt-20">
          東京は革新と伝統が融合する都市であり、最先端の現代性と深い歴史を兼ね備え、世界中の国々から称賛されています。
          <br><br>
          明治神宮や江戸東京博物館などの象徴的な名所でその豊かな歴史を感じつつ、渋谷や秋葉原といった地区では最先端の技術と文化に触れることができます。山手線に乗れば、皇居、東京タワー、煌びやかな新宿のスカイライン、そして圧巻の東京スカイツリーなど、世界的に有名なランドマークを巡ることができます。
        </p>
      </div>

      <div  class="col-lg-6">
        <img src="{{asset('assets/img/pages/about/2.png')}}" alt="image" class="rounded-4">
      </div>
    </div>
  </div>
</section>

@include('includes.subscribe')

@endsection