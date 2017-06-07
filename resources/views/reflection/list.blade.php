@extends('layouts.mobile')

@section('content')
<div class="container reflection">
   @if($reflections->isEmpty())
    <div class="panel panel-default feedback">
      <div class="panel-body">
        <div style="text-align: center">
          <h1>Je hebt nog geen reflectie aangemaakt</h1>
          <a href="{{ url('reflectie/create') }}">Klik hier om een reflectie te schrijven</a>
        </div>
      </div>
    </div>
  @endif
  @foreach($reflections as $reflection)
    <div class="panel panel-default feedback">
      <div class="panel-heading title">
        <a href="/reflectie/{{ $reflection->id }}/view">{{ $reflection->title }}</a>
        <span class="date">Geplaatst op: {{ $reflection->created_at->format('d m Y')}}</span>
      </div>
      <div class="panel-body">
        <div class="message">
          <p>
            {{ str_limit($reflection->message, $limit = 180, $end = '...') }}
          </p>
        </div>

        <div class="col-md-8 tags">
          @foreach($reflection->tags as $tag)
            <span class="tag">{{ $tag }}</span>
          @endforeach
        </div>

        <div class="col-md-4">
          <a href="/reflectie/{{$reflection->id}}/view" class="button" style="">Bekijken</a>
        </div>
      </div>
    </div>
  @endforeach
  <a href="{{ url('reflectie/create') }}">
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  </a>
</div>
@endsection
