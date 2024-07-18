@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Participants</h1>
    <a href="{{ route('participants.create') }}" class="btn btn-primary mb-3">Add Participant</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Género</th>
                <th>Email</th>
                <th>Score</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $participant)
            <tr>
                <td>{{ $participant->id }}</td>
                <td>{{ $participant->nombre }}</td>
                <td>{{ $participant->fecha_nacimiento }}</td>
                <td>{{ $participant->genero }}</td>
                <td>{{ $participant->email }}</td>
                <td>{{ $participant->score }}</td>
                <td>
                    <a href="{{ route('participants.edit', $participant->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('participants.destroy', $participant->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
