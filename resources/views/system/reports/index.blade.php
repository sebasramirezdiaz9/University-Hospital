@extends('adminlte::page')

@section('title', 'Reportes')
<meta name="csrf-token" content="{{ csrf_token() }}">
@routes
@section('content_header')
    <h1>Reportes</h1>
@stop

@section('content')
    <p>Este apartado del sistema te apoyaras para crear los disntintos reportes.</p>
    <div id="app">
        <reports-index></reports-index>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js?v='.filemtime('js/app.js')) }}"></script>
@stop