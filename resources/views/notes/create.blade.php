@extends('layouts.app')

@section('content')
<div class="notes-div">
    <h1>Create Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control notes-title" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control notes-desc" required></textarea>
        </div>
        <button type="submit" class="btn notes-btn" style="margin-bottom: 15px;">Save</button>
    </form>
    <a href="{{ route('notes.index') }}" class="btn notes-btn">Back to Notes</a>
</div>
@endsection
