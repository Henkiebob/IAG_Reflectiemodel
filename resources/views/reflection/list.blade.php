@extends('layouts.mobile')

@section('content')
<div class="container reflection">
    @foreach($reflections as $reflection)
        <div class="row">
          <div class="col-md-12 head">
            <p><a href="/reflectie/{{ $reflection->id }}/view">{{ $reflection->title }}</a></p>
            <p class="time">{{ $reflection->created_at}}</p>
          </div>

          <div class="col-md-12 message">
            <p>{{ $reflection->message }}</p>
          </div>

            <!-- foreach -->
          <div class="col-md-6">
            <span class="tag">{{ $reflection->title }}</span>
          </div>
            <!-- endforeach -->

          <div class="col-md-6">
            <a href="#" class="feedback">Feedback geven</a>
          </div>
        </div>
    @endforeach
    <a class="addNewItemButton" href="{{ url('reflectie/create') }}">+</a>
</div>
@endsection
