@extends('layouts.mobile')

@section('content')
<div class="container reflectiemodel">
    <div class="reflectioncontainer">

      <div class="topleft">
        <a href="/reflectionmodel/3/position" class="derdepositie-een"></a>
        <a href="/reflectionmodel/8/radar">
          <img src="{{ URL::asset('images/custom.png') }}" alt="" class="custom radar">
        </a>
        <a href="/reflectionmodel/7/radar">
          <img src="{{ URL::asset('images/transparent.png') }}" alt="" class="transparant radar">
        </a>
      </div>

      <div class="topright">
        <a href="/reflectionmodel/3/position" class="derdepositie-twee"></a>
        <a href="/reflectionmodel/1/radar">
          <img src="{{ URL::asset('images/theory.png') }}" alt="" class="theorie radar">
        </a>
        <a href="/reflectionmodel/3/radar">
          <img src="{{ URL::asset('images/model.png') }}" alt="" class="model radar">
        </a>
      </div>

      <div class="bottomleft">
        <a href="/reflectionmodel/1/position" class="eerstepositie"></a>
        <a href="/reflectionmodel/6/radar">
          <img src="{{ URL::asset('images/feedback.png') }}" alt="" class="feedback radar">
        </a>
        <a href="/reflectionmodel/5/radar">
          <img src="{{ URL::asset('images/methodology.png') }}" alt="" class="methodiek radar">
        </a>
      </div>

      <div class="bottomright">
        <a href="/reflectionmodel/2/position" class="tweedepositie"></a>
        <a href="/reflectionmodel/2/radar">
          <img src="{{ URL::asset('images/focus.png') }}" alt="" class="gerichtheid radar">
        </a>
        <a href="/reflectionmodel/4/radar">
          <img src="{{ URL::asset('images/strategy.png') }}" alt="" class="strategie radar">
        </a>
      </div>

      <div class="radarinfo">
        <h2><i class="fa fa-info-circle" aria-hidden="true"></i> Klik op een radar of positie voor meer informatie</h2>
      </div>

    </div>
</div>
@endsection
