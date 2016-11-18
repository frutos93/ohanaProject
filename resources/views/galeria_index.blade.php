@extends('layouts.layout')



@section('content')
    <!--

	$user = DB::table('users')->where('name', 'Antonio')->first();
	echo 'Mi email es: '.$user->email;
-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                            <ul class="list-group" id="home-data-summary">
                                @foreach($galerias as $galeria)
                                    <li class="list-group-item" id="galeria-{{ $galeria->id }}">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <p>{{ $galeria->nombre }}</p>
                                            </div>
                                            <div class="col-xs-2">
                                                <a href="{{ route('admin_galeria.edit', ["id" => $galeria->id]) }}" class="btn btn-info">Modificar</a>
                                            </div>
                                            <div class="col-xs-2">
                                                <button type="button" data-name="{{ $galeria->nombre }}" data-content="{{ $galeria->id }}" class="btn-data-delete btn btn-danger">Eliminar</button>
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
<script>
    $(document).ready(function(){
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        var main_div = $("#home-data-summary");
        main_div.find(".btn-data-delete").click(function(){

            if(confirm("¿Seguro que desea borrar la galeria " + $(this).attr("data-name") + "?")){
                var v = $(this).attr("data-content");
                $.ajax({
                    url: "/admin_galeria/" + v,
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(){
                        main_div.find("#galeria-" + v).remove();
                    }
                });
            }
        });
    });
</script>

@endsection

