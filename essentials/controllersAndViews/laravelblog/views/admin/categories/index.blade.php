@extends('adminlte::page')
@section('title', 'JDeveloper')
@section('content_header')
    @can('admin.categories.update')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.categories.create') }}">Agregar Categoria</a>
    @endcan
    <h1>Lista de Categorias.</h1>
@stop
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    <div class="card">
        {{-- <div class="card-header"> </div> --}}
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category->id) }}">Editar</a>                                   
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
