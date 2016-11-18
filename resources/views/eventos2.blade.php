@extends('layouts.layout')

@section('content')

<section id="eventos" class="content-blue">
    <div class="container">
        <div class="row page-header text-center">
            <h1>
                Eventos
            </h1>
        </div>
    </div>

    <section id="slideshow" class="no-padding">
        <!-- Slideshow of home page -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                        <h3><strong>Campamento Ohana</strong></h3>
                        <p>Campamento de verano donde replicamos un modelo de desarrollo de competencias, consolidado por el aprendizaje conjunto e incluyente de las diferentes comunidades e instituciones del país.</p>
                        <p>Alcance-100 niños en cada edición,dirigido a niños de casas hogar y situaciones vulnerables. Entre los 6 y los 12 años.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="/assets/images/2.jpg" alt="Ohana">
                    <div class="carousel-caption">
                        <h3>Verano Ohana</h3>
                        <p>Campamento de verano donde tiene como objetivo formar niños como agentes de cambio, consolidado por el aprendizaje conjunto e incluyente de las diferentes comunidades e instituciones del país</p>
                        <p>Alcance-100 niños en cada edición,dirigido a niños de casas hogar y situaciones vulnerables. Entre los 6 y los 12 años.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="/assets/images/3.jpg" alt="Ohana">
                    <div class="carousel-caption">
                        <h3>Ohanopoly</h3>
                        <p>Con este evento buscamos expandir los horizontes de los niños, mostrándoles otros países y culturas para así despertar su interés por aprender cosas nuevas y diferentes a las que ven en México, además de ubicarse a sí mismos como ciudadanos de entorno globalizado. Además este evento tiene un enfoque artístico por lo que les enseñamos sobre el arte y la cultura de distintos países.</p>
                        <p>Alcance - 50 niños por edición, dirigido a niños de casas hogar y situaciones vulnerables.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="/assets/images/4.jpg" alt="Ohana">
                    <div class="carousel-caption">
                        <h3>Ohana Inc.</h3>
                        <p>Con este evento buscamos fomentar el emprendimiento, la creatividad, el trabajo en equipo y la comunicación. Los niños en equipo emprenden y desarrollan su propia empresa, aprendiendo sobre la ecología y produciendo así productos con material reciclado, así mismo los concientizamos sobre la ecología.</p>
                        <p>Alcance - 50 niños por edición, dirigido a niños de casas hogar y situaciones vulnerables entre los 7 y los 12 años.</p>
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
</section>


@endsection