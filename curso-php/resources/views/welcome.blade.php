@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Search for your Event</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Next events</h2>
        <p class="subtitle">See the events of the next few days</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">xx/xx/xxxx</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">x participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">know more</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection