@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
    <div class="reflectioncontainer">

      <div class="topleft">
        <a href="/reflectionmodel/custom">
          <img src="{{ URL::asset('images/custom.png') }}" alt="" class="custom">
        </a>
        <a href="/reflectionmodel/transparent">
          <img src="{{ URL::asset('images/transparent.png') }}" alt="" class="transparant">
        </a>
      </div>

      <div class="topright">
        <a href="/reflectionmodel/theory">
          <img src="{{ URL::asset('images/theory.png') }}" alt="" class="theorie">
        </a>
        <a href="/reflectionmodel/model">
          <img src="{{ URL::asset('images/model.png') }}" alt="" class="model">
        </a>
      </div>

      <div class="bottomleft">
        <a href="/reflectionmodel/feedback">
          <img src="{{ URL::asset('images/feedback.png') }}" alt="" class="feedback">
        </a>
        <a href="/reflectionmodel/methodology">
          <img src="{{ URL::asset('images/methodology.png') }}" alt="" class="methodiek">
        </a>
      </div>

      <div class="bottomright">
        <a href="/reflectionmodel/focus">
          <img src="{{ URL::asset('images/focus.png') }}" alt="" class="gerichtheid">
        </a>
        <a href="/reflectionmodel/strategy">
          <img src="{{ URL::asset('images/strategy.png') }}" alt="" class="strategie">
        </a>
      </div>

    </div>
</div>
@endsection
