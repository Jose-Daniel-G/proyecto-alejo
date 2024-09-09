@extends('layouts.app')

@section('content')
    <h1>Listado de Usuarios con Roles</h1>
    <a href="{{ route('usuario-rol.create') }}">Asignar nuevo rol a usuario</a>

    <ul>
        @foreach($usuarioRoles as $usuarioRol)
            <li>Usuario ID: {{ $usuarioRol->usuario_id }} - Rol ID: {{ $usuarioRol->rol_id }} - <a href="{{ route('usuario-rol.edit', $usuarioRol->id) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection

