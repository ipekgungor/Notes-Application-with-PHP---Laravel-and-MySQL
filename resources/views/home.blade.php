@extends('layouts.app')

@section('content')
<div class="home-div">
    <h1>Welcome to the notes!</h1>
    <img src="https://imageio.forbes.com/specials-images/imageserve/60808d87824ab7edc3770486/Note-Pad-and-Pen-on-Yellow-background/960x0.jpg?format=jpg&width=1440" alt="notes-default-img" style="width: 530px; height:350px;">
    <h3>Click and add notes</h3>
    <form action="{{ route('notes.create') }}">
        <button type="submit" class="btn notes-btn">Create New Note</button>
    </form>
</div>
@endsection
