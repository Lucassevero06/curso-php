@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

@foreach($events as $event)

    <div id="search-container" class="col-md-12">
        <h1>Busque seu evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p>Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">xx/xx/xxxx</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participantes">x participantes</p>
                    <a href="#" class="btn btn-primary"></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endforeach

@endsection