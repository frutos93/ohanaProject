@extends('layouts.layout')

@section('content')

<link href="css/app.css" rel="stylesheet">

<section id="estadisticas">
    <div class="container">
        <div class="page-header text-center">
            <h1>
                Datos de México
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                
                {{ Html::image('assets/images/bookLogo.png', '', ['class' => 'img-logo-big']) }}
                <h2>
                    ¿Sabías que...?
                </h2>
                <br>
                <h4>
                    - Dentro de las 31 Entidades federativas de México, existe un total de 93, 616 escuelas Primarias.
                </h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="page-header text-center">
                    <h1>
                        Nuestra actualidad...
                    </h1>
                </div>
            <div class="col-md-4 text-center">
            {{ Html::image('assets/images/computerLogo.png', '', ['class' => 'img-logo-book']) }}<br>
                <h2>
                    Tecnologia
                </h2>
                <p>
                    
                </p>
            </div>
            <div class="col-md-4 text-center">
            {{ Html::image('assets/images/schoolLogo.png', '', ['class' => 'img-logo-book']) }}<br>
                <h2>
                    Trabajo
                </h2>
                <p>
                    
                </p>
            </div>
            <div class="col-md-4 text-center">
                {{ Html::image('assets/images/pencilLogo.png', '', ['class' => 'img-logo-book']) }}
                <br>
                <h2>
                    Educacion
                </h2>
                <p>
                    
                </p>
                
            </div>
        </div>  
        <br>
        <div class="page-header text-center">
            <h1>
                Ohana por el cambio
            </h1>
        </div>
        <div class="row">
            <div class="col-md-5 text-center">
            {{ Html::image('assets/images/notebookLogo.png', '',  ['class' => 'img-logo-book', 'style' => 'max-width: 384px; display: block; margin-left: auto; margin-right: auto;']) }}
            </div>
            <div class="col-md-7">
                <h2>
                Cómo operamos:
                </h2>
                <br>
                <ul>
                  <li><h4>Formada por una mesa directiva, un consejo y grupos estudiantiles, en conjunto trabajamos para desarrollar proyectos, ideas y actividades con nuestros voluntarios y niños.<h4></li><br>
                
            </div>
            <div class="col-md-7">
                <h2>
                Dónde trabajamos:
                </h2>
                <br>
                <ul>
                  <li><h4>Trabajamos en distintas sedes estudiantiles, de la Universidad Autónoma de Nuevo León y del Tecnológico de Monterrey.<h4></li><br>
                </ul>
            </div>
            <div class="col-md-7" >
                <h2>
                Equipo:
                </h2>
                <br>
                <ul>
                  <li><h4>Nuestro equipo de trabajo está conformado por directores especializados en distintas áreas laborales y en conjunto formamos gabinetes de trabajo.<h4></li><br>
                </ul>
            </div>
        </div>
    </div>
</section>

    @endsection