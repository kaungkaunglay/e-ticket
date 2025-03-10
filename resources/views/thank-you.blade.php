@extends('includes.layout')

@section('contents')

<div class="container text-center mt-5">
    <h2>Thank You!</h2>
    <p>Your booking has been successfully submitted.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
</div>

@endsection
