@extends('adminlte::page')

@section('title', 'Ventas')
<meta name="csrf-token" content="{{ csrf_token() }}">
@routes
@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')
    <p>En este apartado puedes registrar las ventas del sistema</p>
    <div id="app">
        <sales-create></sales-create>
        <sales-index></sales-index>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js?v='.filemtime('js/app.js')) }}"></script>
@stop