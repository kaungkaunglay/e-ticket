@extends('includes.layout')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('contents')

<section>
  <div class="relative container">
    <div class="row justify-center">
      <div class="col-xl-5 col-lg-7">
        <div class="text-22 fw-500 text-center py-20">
          How Can I Help You?
        </div>

        <div class="row y-gap-20">
          @foreach($supports as $support)
          <div class="col-12">
            <div class="form-select">
              <div class="d-flex">

                <input type="button" value="{{ $support->title }}" class="dropdown-toggle">
              </div>
              <div class="select-dropdown">
                <ul>
                  @if($support->questions->isNotEmpty())
                  @foreach($support->questions as $question)
                  <li><a href="#">{{ $question->description }}</a></li>
                  @endforeach
                  @else
                  <li>No questions available</li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>

@endsection