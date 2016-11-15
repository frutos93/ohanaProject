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
                                @foreach($galerias as $galeria)
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <p>{{ $galeria->nombre }}</p>
                                            </div>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-info">Modificar</button>
                                            </div>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('admin_galeria.create') }}" class="btn btn-primary pull-right">Crear
                                galeria</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

