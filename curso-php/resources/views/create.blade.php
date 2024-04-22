@extends('layouts.main')

@section('title', 'Create Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Create Event</h1>
    <form action="/events/" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Event:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Name of Event"
            required>
        </div>
        <div class="form-group">
            <label for="title">City:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Event's Place" required>
        </div>
        <div class="form-group">
            <label for="title">Event is Private?</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Description:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Describe the event" required></textarea>
        </div>
        <input type="submit" value="Create Event" class="btn btn-primary">
    </form>
</div>

@endsection('content')