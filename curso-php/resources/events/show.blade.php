@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="iamge-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="infor-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon class="location-outline"></ion-icon>{{ $event->city }}</p>
            </div>
        </div>
    </div>

@endsection