@extends('layouts.layout')



@section('content')

    <style>
        .row a:hover {
            cursor: pointer;
        }

        .btn-warning {
            z-index: 10;
        }
    </style>

    <script type="text/javascript" charset="utf8 " src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">

    <link href="css/app.css" rel="stylesheet">

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Eventos
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Haga clic en la opcion que desee</div>
                        <div class="panel-body">

                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Fecha</th>
                                        <th>Lugar</th>
                                        <th>Coordinador</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($eventos as $evento)
                                        <tr>
                                            <td>{{ $evento->nombre }}</td>
                                            <td>{{ $evento->fecha }}</td>
                                            <td>{{ $evento->lugar }}</td>
                                            <td>{{ $evento->coorNombre }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <a href="{{ route('evento.create') }}" class="btn btn-success pull-right">Agregar Eventos</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/showDataTable.js"></script>

@endsection
