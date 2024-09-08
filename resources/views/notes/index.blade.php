@extends('layouts.app')

@section('content')
<div class="notes-div">
    <h1>Notes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Create Date</th>
                    <th>Last Update Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->created_at }}</td>
                    <td>{{ $note->updated_at }}</td>
                    <td>
                        <form action="{{ route('notes.edit', $note) }}" style="display: inline;">
                            <button class="btn notes-btn">Edit</button>
                        </form>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn notes-btn">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('notes.create') }}">
                <button type="submit" class="btn notes-btn">Create New Note</button>
        </form>
</div>
@endsection
