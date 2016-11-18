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
    <script type="text/javascript" charset="utf8 " src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link href="css/app.css" rel="stylesheet">

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Galería
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Haga clic en la opcion que desee</div>
                        <div class="panel-body">
                            <table id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody id="home-data-summary">
                                    @foreach($galerias as $galeria)
                                    <tr>
                                        <td>{{ $galeria->nombre }}</td>
                                        <td>
                                            <div class="col-xs-2">
                                                <a href="{{ route('admin_galeria.edit', ["id" => $galeria->id]) }}" class="btn btn-primary">Modificar</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-xs-2">
                                                <button type="button" data-name="{{ $galeria->nombre }}" data-content="{{ $galeria->id }}" class="btn-data-delete btn btn-danger">Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <a href="{{ route('admin_galeria.create') }}" class="btn btn-success pull-right">Crear galeria</a>
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
<script src="js/showDataTable.js"></script>

@endsection

