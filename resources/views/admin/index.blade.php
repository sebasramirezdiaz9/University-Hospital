@extends('adminlte::page')

@section('title', 'Dashboard')
<meta name="csrf-token" content="{{ csrf_token() }}">
@routes

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-md-6">
                <max-provider></max-provider>
            </div>
            <div class="col-md-6">
                <min-medicament></min-medicament>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
            <div class="card">
                    <div class="card-body">
                        <p>Ingresos por cita</p>
                    <profits-index></profits-index>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="card">
                    <div class="card-body">
                        <p>Citas por doctor</p>
                    <dates-doctors></dates-doctors>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>Clientes Nuevos por mes en el año actual</p>
                    <dashboard-patients></dashboard-patients>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/app.js?v='.filemtime('js/app.js')) }}"></script>
@stop

