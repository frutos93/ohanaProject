@extends('layouts.layout')

@section('content')

<link href="css/app.css" rel="stylesheet">

  <!-- Gallery container -->
  <div class="container">
    <div class="page-header text-center">
            <h1>
                Galería de fotos
            </h1>
        </div>
    <div class="row">

      <br>
      <div class="row">
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 1" href="#">{{ Html::image('assets/images/2.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 2" href="#">{{ Html::image('assets/images/3.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 3" href="#">{{ Html::image('assets/images/4.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 4" href="#">{{ Html::image('assets/images/3.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 5" href="#">{{ Html::image('assets/images/2.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 6" href="#">{{ Html::image('assets/images/3.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 7" href="#">{{ Html::image('assets/images/4.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 8" href="#">{{ Html::image('assets/images/2.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 9" href="#">{{ Html::image('assets/images/3.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 10" href="#">{{ Html::image('assets/images/1.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 11" href="#">{{ Html::image('assets/images/4.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 12" href="#">{{ Html::image('assets/images/1.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 13" href="#">{{ Html::image('assets/images/2.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 14" href="#">{{ Html::image('assets/images/3.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 15" href="#">{{ Html::image('assets/images/1.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
        <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Verano Ohana 16   " href="#">{{ Html::image('assets/images/4.jpg', '', ['class' => 'thumbnail img-responsive']) }}</a></div>
      </div>
    </div>
  </div>


  <div class="modal" id="myModal" role="dialog">
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
            <!--
            <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->
            
          </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-default pull-left" href="#modalCarousel" data-slide="prev">Anterior</button>
      <!--<button class="btn btn-default" data-dismiss="modal">Close</button>-->
      <button class="btn btn-default pull-right" href="#modalCarousel" data-slide="next">Siguiente</button>
    </div>
     </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/scripts.js"></script>

@endsection