<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ticket</title>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        h4 {
            text-align: center;
            font-size: 20px;
            padding-top: 25px;
        }

        h5 {
            text-align: left;
            font-size: 15px;
            padding-top: 15px;
        }

        hr {
            background: black;
            height: 1px;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: black;
            background: #FFFFFF;
            font-family: Roboto, sans-serif;
            font-size: 12px;
        }

        header {
            padding: 5px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #details {
            margin-bottom: 5px;
        }

        h2 {
            font-size: 1.4em;
            font-weight: normal;
            margin: 0;
            float: right;
            text-align: right;
           
          
        }
        .text-red{
                color: red;
        
        }
        h1 {
            color: black;
            font-size: 1.7em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
            float: right;
            text-align: right;
        }

        .date {
            font-size: 1.7em;
            
            color: #777777;
            float: right;
        }


        table {
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 5px;
        }

        .table_left {
            width: 70% !important;
        }

        .tiny_table {
            border: solid black .5px;
            padding: 0;
            text-align: center;
        }

        .num {
            width: 45px;|
        }

        .breakNow{
            page-break-after:always;
        }
        .tiny {
            width: 100% !important;
        }

        .pests {
            padding-top: 0 !important;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding-bottom: 0;
            padding-top: 2px;
            background: white;
            text-align: left;
            border-width: .5px;

        }

        .desc {
            width: 130px;
            min-height: 15px;
            display: block;
            border-color: #f4f5f8;
            color: #6f727d;
            background-color: #f5f6f9;
            border-radius: .25rem;
            padding: .3rem .6rem;
            margin-right: 7px;
            word-wrap: break-word;

        }

        .bg-dark{
            color: #6f727d;
            background-color: #f5f6f9;
            text-align: center;
        }

        .title {
            background: white;
            display: block;
            width: 150px;
        }

        .rectangular-box {
            background: black;
            position: relative;
            width: auto;
            height: 4px;
            display: block;
            top: 50px;
        }



        .right {
            width: 35% !important;
        }

        .left {
            width: 70% !important;
        }

        .right, .left {
            height: 20px;
        }

        .pull-right {
            float: right !important;
        }

        .pull-left {
            float: left !important;
        }
    </style>
</head>
<body>
<main>
    <div class="breakNow"></div>
        <div id="details" class="clearfix">
        <img src="{{ public_path('/storage/login.png') }}" width="100px" height="100px">
        <div class="date">{{\Carbon\Carbon::now()->format('Y-m-d')}}</div>
        <br><br>
        <div id="invoice" class="pull-left">
            <div><h1>Todas los Pacientes</h1></div>
        </div>
        <div id="invoice" class="pull-right">
            <div>
                <h2 id="title">
                    <strong>
                            Clinica Bienestar
                    </strong>
                </h2>
            </div>
        </div>
        <div class="rectangular-box"></div>
        <br>
    </div>
    <br>
    <br>
    <br>
    <h2 class="text-red pull-left">Pacientes</h2>
    @foreach($patients as $patient)
    <br>
    <br>
    <br>
    <table style="width: 100%">
        <tr>
            <td style="width: 35% !important; padding-top:8px;">
                <table border="0" cellspacing="3" cellpadding="3" class="table_left">
                    <tr>
                        <td><label class="title" for="input"> Id de Paciente</label></td>
                        <td><label class="desc">{{$patient->id}}</label></td>
                    </tr>
                    <tr>
                        <td><label class="title" for="input">Nombre</label></td>
                        <td><label class="desc">{{$patient->name}}</label></td>
                    </tr>
                    <tr>
                        <td><label class="title" for="input">Apellido Paterno</label></td>
                        <td>
                            <label class="desc">
                            {{$patient->ape_pat}}
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="title" for="input">Apellido Materno</label></td>
                        <td><label class="desc">{{$patient->ape_mat}}</label></td>
                    </tr>
                </table>
            </td>
            <td style="width: 35% !important; padding-top:8px; vertical-align: top">
                <table border="0" cellspacing="0" cellpadding="0" class="table_left">
                    <tr>
                        <td><label class="title" for="input">Teléfono</label></td>
                        <td>
                            <label class="desc" style="font-size: 90%;">
                            {{$patient->telefono}}
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="title" for="input">Genero</label></td>
                        <td><label class="desc"> {{$patient->genero}}</label></td>
                    </tr>
                    <tr>
                        <td><label class="title" for="input">Fecha de nacimiento</label></td>
                        <td><label class="desc">{{$patient->fecha_nacimiento}}</label></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <hr>
    @endforeach
</main>
</body>
</html>