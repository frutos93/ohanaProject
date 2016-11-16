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
                Participantes
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
                                        <th>CURP</th>
                                        <th>Casa hogar</th>
                                        <th>Evento</th>
                                        <th>Equipo</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($participantes as $participante)
                                        <tr>
                                            <td>{{ $participante->nombre }}</td>
                                            <td>{{ $participante->apellido_paterno . ' ' . $participante->apellido_materno }}</td>
                                            <td>{{ $participante->curp }}</td>
                                            <td>{{ $participante->chnombre }}</td>
                                            <td>{{ $participante->etnombre }}</td>
                                            <td>{{ $participante->partequipo }}</td>
                                            
                                            <td>
                                                <div class="col-xs-2">
                                                    <a href="{{ route('participantes.modify', [
                                                    'id' => $participante->id,
                                                    'eventoid' => $participante->etid,
                                                    'participacionid' => $participante->partid,
                                                    ] 
                                                    ) }}">
                                                        <button type="button" class="btn btn-primary">Modificar</button>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-xs-2">
                                                    <a href="{{ route('participantes.delete', [
                                                    'id' => $participante->id,
                                                    'eventoid' => $participante->etid,
                                                    'participacionid' => $participante->partid,
                                                    ] ) }}">
                                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <a href="{{ route('participantes.create') }}" class="btn btn-success pull-right">Agregar participante</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/showDataTable.js"></script>

@endsection

