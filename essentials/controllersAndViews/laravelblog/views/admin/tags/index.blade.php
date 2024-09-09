@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}">Nueva Etiqueta</a>
    <h1>Mostrar listado de etiqueta</h1>

@stop

@extends('adminlte::page')

@section('content')
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    <div class="card">
        {{-- <div class="card-header"></div> --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit', $tag->id) }}">Editar</a>
                                @endcan
                            </td>
                            <td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" name="delete" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

{{-- {{-- {{@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}
{{-- 
@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
