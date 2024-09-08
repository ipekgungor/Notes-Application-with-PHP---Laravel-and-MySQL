@extends('layouts.app')

@section('content')
<div class="notes-div">
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control notes-title" value="{{ $note->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control notes-desc" required>{{ $note->description }}</textarea>
        </div>
        <button type="submit" class="btn notes-btn" style="margin-bottom: 15px;">Update</button>
    </form>
    <a href="{{ route('notes.index') }}" class="btn notes-btn">Back to Notes</a>
</div>
@endsection
