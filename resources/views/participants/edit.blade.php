@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Participante</h1>
    <form action="{{ route('participants.update', $participant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $participant->id }}" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $participant->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $participant->fecha_nacimiento }}" required>
        </div>
        <label for="genero" class="form-label">Género</label>
            <select class="form-control" id="genero" name="genero" required>
                <option value="Masculino" {{ $participant->gender == 'male' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $participant->gender == 'female' ? 'selected' : '' }}>Femenino</option>
                <option value="Otro" {{ $participant->gender == 'other' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $participant->email }}" required>
        </div>
        <div class="mb-3">
            <label for="score" class="form-label">Puntaje</label>
            <input type="number" class="form-control" id="score" name="score" value="{{ $participant->score }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection