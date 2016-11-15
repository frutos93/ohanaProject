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
    </style>

    <link href="css/app.css" rel="stylesheet">

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Agregar coordinador
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open([
                            'route' => 'profile.update',
                            'method' => 'PUT',
                            'class' => 'form-horizontal',
                            'enctype' => "multipart/form-data",
                            ]) !!}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Imagen de perfil</label>
                                <div class="col-md-6">
                                    {!! Form::file('image', '', [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    ]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Registrar', [
                                        'class' => 'btn btn-primary'
                                    ]) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

