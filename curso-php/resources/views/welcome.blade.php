@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

@foreach($events as $event)

    <p>{{ $event->title }} -- {{ $event->description }}</p>

@endforeach

@endsection