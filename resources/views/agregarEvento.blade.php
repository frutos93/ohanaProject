@extends('layouts.layout')



@section('content')
<!--

	$user = DB::table('users')->where('name', 'Antonio')->first();
	echo 'Mi email es: '.$user->email;
-->

<style>
    .row a:hover{
        cursor: pointer;
    }
</style>

<link href="css/app.css" rel="stylesheet">

  <!-- Gallery container -->
  <div class="container">
    <div class="page-header text-center">
            <h1>
                Agregar Evento
            </h1>
        </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open([
                    'route' => 'agrEvento.store',
                    'class' => 'form-horizontal'
                    ]) !!}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                {!! Form::text('nombre', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                                <!-- <input id="name" type="text" class="form-control" name="name" value="" required autofocus>-->

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Name" class="col-md-4 control-label">Lugar</label>
                            <div class="col-md-6">
                                {!! Form::text('lugar', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha</label>
                            <div class="col-md-6">
                                {!! Form::date('fecha', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Coordinador 1</label>
                            <div class="col-md-6">
                                {!! Form::date('fecha', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Coordinador 2</label>
                            <div class="col-md-6">
                                {!! Form::date('fecha', '', [
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


@endsection
