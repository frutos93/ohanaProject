<link href="css/app.css" rel="stylesheet">
@extends('layouts.layout')

@section('content')

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from previously active menu item
        $('#home').addClass('active');
    });
</script>


<section id="slideshow" class="no-padding content-blue">
    <!-- Slideshow of home page -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/assets/images/1.jpg" alt="Ohana">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="/assets/images/2.jpg" alt="Ohana">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="/assets/images/3.jpg" alt="Ohana">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="/assets/images/4.jpg" alt="Ohana">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Controlador de slideshow -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="content-green" id="content1">
    <!-- Content -->
    <div>
        <div class="container">
            <!-- Content -->
                <div class="col-md-8 card">
                    <div class="row content-blue rounded-border">
                        <h2>¿Qué es Ohana?</h2>
                    </div>
                    <p>Ohana es una Asociación Civil conformada por estudiantes de distintas universidades de México que por medio del voluntariado promueve el desarrollo social, el amor a la educación, el cuidado del medio ambiente, la importancia de los valores y el deseo de progresar como ciudadanos en los niños de casas hogar y escasos recursos</p>

                </div>
                <div class="col-md-4 card">
                    <div class="card-block">
                    <img class="img-rounded img-responsive center-block hidden-lh" src="assets/images/logo.png" alt="" style="width: 80%; height: auto">
                    </div>
                </div>
            </div>
            <!-- /.row -->
    </div>
</section>
<section class="content-blue" id="content2">
    <!-- Content -->
    <div>
        <div class="container">
            <!-- Content -->
            <div class="row">
                <div class="col-md-8">
                    <div class="row content-green rounded-border">
                        <h2>¿Quiénes lo conforman?</h2>
                    </div>
                    <p>Conformado por grupos estudiantiles de distintas universidades y preparatorias de Nuevo León e integrado por una mesa directiva y gabinetes de trabajo. Todos en conjunto estamos conformados por jóvenes voluntarios comprometidos en transformar comunidades. </p>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</section>

@endsection
