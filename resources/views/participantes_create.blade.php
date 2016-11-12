@extends('layouts.layout')



@section('content')




<style>
    .row a:hover{
        cursor: pointer;
    }
</style>
  <link href="/css/app.css" rel="stylesheet">

  <!-- Gallery container -->
  <div class="container">
    <div class="page-header text-center">
            <h1>
                Agregar participante
            </h1>
        </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open([
                    'route' => 'participantes.store',
                    'method' => 'POST',
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
                            <label for="Name" class="col-md-4 control-label">Apellido paterno</label>
                            <div class="col-md-6">
                                {!! Form::text('apellido_paterno', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Apellido materno</label>
                            <div class="col-md-6">
                                {!! Form::text('apellido_materno', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Casa hogar</label>
                            <div class="col-md-6">
                                    {{ Form::select('casahogar_id', $casashogares, 
                                    null,
                                    [
                                        'class' => 'form-control    ',
                                        'required' => 'required'
                                    ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">CURP</label>
                            <div class="col-md-6">
                                {!! Form::text('curp', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                                <!-- <input id="name" type="text" class="form-control" name="name" value="" required autofocus>-->
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Evento</label>
                            <div class="col-md-6">
                                    {{ Form::select('evento_id', $eventos, 
                                    null,
                                    [
                                        'class' => 'form-control    ',
                                        'required' => 'required'
                                    ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Equipo</label>
                            <div class="col-md-6">
                                {!! Form::text('equipo', '', [
                                    'class' => 'form-control',
                                    'autofocus' => 'autofocus',
                                    'required' => 'required'
                                ]) !!}
                                <!-- <input id="name" type="text" class="form-control" name="name" value="" required autofocus>-->

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Registrar', [
                                    'class' => 'btn btn-primary'
                                ]) !!}
                                <a href="{{ route('participantes.index') }}">
                                    <button type="button" class="btn btn-default">Cancelar</button>
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
