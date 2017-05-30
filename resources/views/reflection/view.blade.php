@extends('layouts.mobile')

@section('content')
<div class="container reflection">
  <div class="navigation">
    {{-- <a href="/reflecties" class="back">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>Terug naar reflecties
    </a> --}}
    <a href="/reflectie/{{ $reflection->id }}/update" class="edit">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Wijzigen</a>
    <a href="/reflectie/{{ $reflection->id }}/delete" class="del">
      <i class="fa fa-trash-o" aria-hidden="true"></i>Verwijderen
    </a>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <span class="title">{{ $reflection->title }}</span>
      <span class="date">
        Geplaats op: {{ $reflection->created_at->format('d m Y')}}
      </span>
    </div>
    <div class="panel-body">
      <div class="message">
        <p>{{ $reflection->message }}</p>
      </div>
      
      <div class="col-md-6 tags">
        @foreach($reflection->tags as $tag)
          <span class="tag">{{ $tag }}</span>
        @endforeach
      </div>
    </div>
  </div> 
</div>
@endsection
