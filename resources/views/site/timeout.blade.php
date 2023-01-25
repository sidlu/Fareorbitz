@extends('layouts.common')

@section('baseContent')
<div class="featured_gray">
<div class="container">
<div class="row">
<div class="col-md-5">
<img src="{{url('/images/timeout.gif')}}" alt="timeout">
</div>
<div class="col-md-7 text-left mt-5 text-center">
  <h1 class="mt-50">Your session has been timed out.</h1>
  <p class="mt-20">Because of inactivity, your session has been timed out and is no longer active.</p>
  <div class="text-center">
  <a href="{{url('/')}}" class="mt-5 btn btn-primary waves-effect">Back to Homepage</a>
  </div>
</div>
</div>
</div>
</div>
@endsection