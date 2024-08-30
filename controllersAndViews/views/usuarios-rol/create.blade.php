@extends('layouts.app')

@section('content')
    <h1>Asignar Rol a Usuario</h1>

    <form method="POST" action="{{ route('usuario-rol.store') }}">
        @csrf
        <div>
            <label for="usuario_id">ID del Usuario:</label>
            <input type="text" name="usuario_id" id="usuario_id" required>
        </div>

        <div>
            <label for="rol_id">ID del Rol:</label>
            <input type="text" name="rol_id" id="rol_id" required>
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
