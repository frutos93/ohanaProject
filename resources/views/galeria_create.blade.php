@extends('layouts.layout')



@section('content')
    {{ Html::style('css/app.css') }}
    {{ Html::style('css/fileinput.min.css') }}

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Crear galeria
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open([
                            'route' => 'admin_galeria.store',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data'
                            ]) !!}

                            <div class="form-group row">
                                <label for="nombre" class="col-xs-3">Nombre</label>
                                <div class="col-xs-12">
                                    {!! Form::text('nombre', '', [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus',
                                        'required' => 'required'
                                    ]) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descripcion" class="col-xs-3">Descripcion</label>
                                <div class="col-xs-12">
                                    {!! Form::textArea('descripcion', '', [
                                        'class' => 'form-control',
                                        'autofocus' => 'autofocus',
                                    ]) !!}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">
                                    <h2>Imagenes</h2>
                                </div>
                                <div class="col-xs-6">
                                    <br>
                                    <div class="text-right">
                                        {!! Form::button('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', [
                                        'class' => 'btn btn-success',
                                        'id' => 'image_append_button'
                                        ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="image_inputs">
                                <div class='col-xs-6'>
                                    <div class='row'>
                                        <div class='col-xs-12'>
                                            <label for='imagen' class='control-label'>Imagen de portada</label>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12'>
                                            <input name="input_files[]" type="file" class="file"
                                                   data-show-upload="false" data-show-caption="true">
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12'>
                                            <label for='imagen' class='control-label'>Nombre</label>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12'>
                                            <input name="files[nombre][]" type="text" class="form-control"
                                                   data-show-upload="false" data-show-caption="true">
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12'>
                                            <label for='imagen' class='control-label'>Descripcion</label>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-xs-12'>
                                            <textarea name="files[descripcion][]" type="text" class="form-control"
                                                      data-show-upload="false" data-show-caption="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="text-right">
                                        {!! Form::submit('Crear galeria', [
                                        'class' => 'btn btn-primary'
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Html::script('js/fileinput.min.js') }}
    <script>
        $(document).ready(function () {
            $("#image_append_button").click(function () {
                var l = $("input.bs_file").length;
                if (l % 2 == 0) {
                    $("#image_inputs").append("<div class='row'>");
                }

                $("#image_inputs").append(
                        "<div class='col-xs-6'>" +
                        "<div class='row'>" +
                        "<div class='col-xs-12'>" +
                        "<label for='imagen' class='control-label'>Imagen</label>" +
                        "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-xs-12'>" +
                        '<input name="input_files[]" type="file" class="file" data-show-upload="false" data-show-caption="true">' +
                        "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-xs-12'>" +
                        "<label for='imagen' class='control-label'>Nombre</label>" +
                        "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-xs-12'>" +
                        '<input name="files[nombre][]" type="text" class="form-control" data-show-upload="false" data-show-caption="true">' +
                        "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-xs-12'>" +
                        "<label for='imagen' class='control-label'>Descripcion</label>" +
                        "</div>" +
                        "</div>" +
                        "<div class='row'>" +
                        "<div class='col-xs-12'>" +
                        '<textarea name="files[descripcion][]" type="text" class="form-control" data-show-upload="false" data-show-caption="true"></textarea>' +
                        "</div>" +
                        "</div>" +
                        "</div>"
                );
                if (l % 2 == 1) {
                    $("#image_inputs").append("</div>");
                }

                var c = $("input.file:not(.bs_file)");
                c.fileinput();
                c.addClass("bs_file");
            });
        });
    </script>

@endsection

