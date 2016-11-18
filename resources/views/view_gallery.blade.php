@extends('layouts.layout')

@section('content')


    <style>
        .row a:hover {
            cursor: pointer;
        }
    </style>


    {{ Html::style('css/app.css') }}

    <!-- Gallery container -->
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Galería de fotos
            </h1>
        </div>
        <div class="row">
            @foreach($galeria->imagenes as $imagen)
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <a data-toggle="modal" title="{{ $imagen->nombre }}">
                        {{ Html::image('uploads/' . $imagen->url, '', ['class' => 'thumbnail img-responsive']) }}
                    </a>
                </div>
            @endforeach
        </div>
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