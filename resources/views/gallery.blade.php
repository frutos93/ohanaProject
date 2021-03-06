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
                Galería de fotos
            </h1>
        </div>
        @foreach($galerias as $galeria)
            <div class="col-lg-3 col-sm-4 col-xs-6 text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <h4>{{ $galeria->nombre }}</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <a href="{{ route('gallery.view', ["id" => $galeria->id]) }}">
                            {{ Html::image('uploads/' . $galeria->imagenes()->first()->url,  '', ['class' => 'img-responsive', 'style' => 'margin: 0 auto;']) }}
                        </a>
                    </div>
                </div>
                <br>
            </div>
        @endforeach

    </div>


    <div class="modal" id="myModal" role="dialog" style="padding-top: 32px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title">Verano Ohana 1</h3>
                </div>
                <div class="modal-body">
                    <div id="modalCarousel" class="carousel">
                        <div class="carousel-inner">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default pull-left" href="#modalCarousel" data-slide="prev">Anterior</button>
                    <!--<button class="btn btn-default" data-dismiss="modal">Close</button>-->
                    <button class="btn btn-default pull-right" href="#modalCarousel" data-slide="next">Siguiente
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ Html::script('js/galleryModal.js') }}
@endsection