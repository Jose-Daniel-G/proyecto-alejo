@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar detalle de la etiqueta</h1>
@stop

@extends('adminlte::page')

@section('content')
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}
            @include('admin.tags.partials.form')
            {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

{{-- {{-- {{@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}} --}}
@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#name').stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>
@stop
