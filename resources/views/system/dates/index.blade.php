@extends('adminlte::page')

@section('title', 'Dashboard')
<meta name="csrf-token" content="{{ csrf_token() }}">
@routes
@section('content_header')
    <h1>Citas</h1>
@stop

@section('content')
   
    <div id="app">
        <div class="card">
            <div class="card-body">
                <p>En este apartado puedes administrar las citas de los pacientes, para registrar, ver o editar a las mismas</p>
                <date-create></date-create><br>
                 <date-index></date-index>
            </div>
        </div>
        
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js?v='.filemtime('js/app.js')) }}"></script>
@stop