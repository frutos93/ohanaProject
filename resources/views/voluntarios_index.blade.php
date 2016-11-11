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
                Voluntarios
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
                                        <th>Apellidos</th>
                                        <th>Escuela</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($voluntarios as $voluntario)
                                        <tr>
                                            <td>{{ $voluntario->nombre }}</td>
                                            <td>{{ $voluntario->apellido_paterno . ' ' . $voluntario->apellido_materno }}</td>
                                            <td>{{ $voluntario->escuela }}</td>
                                            <td>
                                                <div class="col-xs-2">
                                                    <a href="{{ route('voluntarios.modify', ['id' => $voluntario->id] ) }}">
                                                        <button type="button" class="btn btn-primary">Modificar</button>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-xs-2">
                                                    <a href="{{ route('voluntarios.delete', ['id' => $voluntario->id] ) }}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <a href="{{ route('voluntarios.create') }}" class="btn btn-success pull-right">Agregar voluntario</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/showDataTable.js"></script>

@endsection

