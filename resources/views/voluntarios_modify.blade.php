@extends('layouts.layout')



@section('content')

    

    <style>
        .row a:hover {
            cursor: pointer;
        }
    </style>

    <link href="/css/app.css" rel="stylesheet">

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Modificar voluntario
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open([
                            'route' => 'voluntarios.update',
                            'method' => 'POST',
                            'class' => 'form-horizontal'
                            ]) !!}

                            <div class="form-group" hidden>
                                <div class="col-md-6">
                                    {!! Form::text('id', $voluntario->id, [
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    {!! Form::text('nombre', $voluntario->nombre, [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Name" class="col-md-4 control-label">Apellido paterno</label>
                                <div class="col-md-6">
                                    {!! Form::text('apellido_paterno', $voluntario->apellido_paterno, [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Apellido materno</label>
                                <div class="col-md-6">
                                    {!! Form::text('apellido_materno', $voluntario->apellido_materno, [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus'
                                    ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Escuela</label>
                                <div class="col-md-6">
                                    {!! Form::text('escuela', $voluntario->escuela, [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    ]) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit('Modificar', [
                                        'class' => 'btn btn-primary'
                                    ]) !!}
                                    <a href="{{ route('voluntarios.index') }}">
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

