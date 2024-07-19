@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Participante</h1>
    <form action="{{ route('participants.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Género</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male">Masculino</option>
                <option value="female">Femenino</option>
                <option value="other">Otro</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="score" class="form-label">Puntaje</label>
            <input type="number" class="form-control" id="score" name="score" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
</div>
@endsection
