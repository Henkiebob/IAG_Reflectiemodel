@extends('layouts.mobile')

@section('content')
<div class="container home">
    <div class="panel panel-default">
        <div class="header">
            <a href="{{ url('profile') }}">
                @if(Auth::check())
                <span class="name">Welkom: {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                @endif
            </a>
        </div>

        <div class="row row-centered upperrow">
            <a href="{{ url('reflecties') }}">
                <div class="col-xs-6 col-centerd column">
                     <img src="icons/GiveFeedbackIcon.svg" alt="Reflectie icoon">
                     <span class="subtitle">Mijn Reflecties</span>
                </div>
            </a>
            <a href="{{ url('reflectionmodel') }}">
                <div class="col-xs-6 col-centerd column col-xs-offset-2">
                    <img src="icons/IAGModelIcon.svg" alt="Reflectie icoon">
                    <span class="subtitle">Reflectiemodel</span>
                </div>
            </a>
        </div>

        <div class="row row-centered lowerrow">
             <a href="{{ url('feedback') }}">
                <div class="col-xs-6 col-centerd column">
                     <img src="icons/FeedbackIconQuestion.svg" alt="Reflectie icoon">
                     <span class="subtitle">Feedback Geven</span>
                </div>
            </a>
            <a href="{{ url('archive') }}">
                <div class="col-xs-6 col-centerd column col-xs-offset-2">
                    <img src="icons/ArchiveIcon.svg" alt="Reflectie icoon">
                    <span class="subtitle">Mijn Archief</span>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
