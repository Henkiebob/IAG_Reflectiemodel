@extends('layouts.mobile')

@section('content')
  <div class="container feedback">
    @foreach($reflections as $reflection)
      <div class="row">
        <div class="col-md-12 head">
          <img class="img-circle" src="http://placehold.it/50x50" alt="">
          <span>{{ $reflection->title }}</span>
          <span class="time">123-213-21233</span>
        </div>

        <div class="col-md-12 message">
          <p>{{ $reflection->message }}</p>
        </div>

        <div class="col-md-6">
          <span class="tag">tag</span>
        </div>

        <div class="col-md-6">
          <a href="/feedback/{{ $reflection->id }}/view" class="button feedback">Feedback geven</a>
        </div>
      </div>
    @endforeach
  </div>
@endsection
