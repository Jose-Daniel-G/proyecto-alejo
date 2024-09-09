@extends('adminlte::page')

@section('title', 'JDeveloper')

@section('content_header')
<a href="{{route('admin.posts.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo post</a>
    <h1>Listado de Posts</h1>
@stop
@section('content')
@livewire('admin.posts-index')
@stop

{{-- {{@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}