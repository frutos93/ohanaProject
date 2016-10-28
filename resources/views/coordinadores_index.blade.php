@extends('layouts.layout')



@section('content')
    <!--

	$user = DB::table('users')->where('name', 'Antonio')->first();
	echo 'Mi email es: '.$user->email;
-->

    <style>
        .row a:hover {
            cursor: pointer;
        }

        .btn-warning {
            z-index: 10;
        }
    </style>

    <link href="css/app.css" rel="stylesheet">

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Coordinadores
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Haga clic en la opcion que desee</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($coordinadores as $coordinador)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <p>{{ $coordinador->nombre . ' ' . $coordinador->apellido_paterno . ' ' . $coordinador->apellido_materno }}</p>
                                            </div>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-warning">Modificar</button>
                                            </div>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-center">
                                <ul class="pagination">
                                    <li><a href="?p=0" data-original-title="" title="">1</a></li>
                                    <li><a href="?p=1" data-original-title="" title="">2</a></li>
                                    <li><a href="?p=1" data-original-title="" title="">3</a></li>
                                </ul>
                            </div>
                            <a href="/agregarCoordinador" class="btn btn-primary pull-right">Agregar coordinador</a>
                        </div>
                    </div>
                </div>
            </div>


@endsection

