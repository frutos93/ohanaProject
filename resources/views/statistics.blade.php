@extends('layouts.layout')

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{ Html::image('assets/images/bookLogo.png', '', ['class' => 'img-logo-book']) }}
                    <div class="col-lg-12 text-center">
                        <h2>Datos de México</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¿Sabías que...?</h2>
                </div>
                <br><br><br><br><br><br>

                <div class="col-md-4 text-center">
                    {{ Html::image('assets/images/bookLogo.png', '', ['class' => 'img-logo-book']) }}<br>
                    <p>La falta de calidad en la educación dificulta el desarrollo de una fuerza de trabajo sana, educada y
                        productiva, según el índice del Foro Económico Mundial.</p>
                </div>
                <div class="col-md-4 text-center">
                    {{ Html::image('assets/images/bookLogo.png', '', ['class' => 'img-logo-book']) }}<br>
                    <p>La calidad de la educación en México ocupa uno de los últimos lugares de listado de 124 países</p>
                </div>
                <div class="col-md-4 text-center">
                    {{ Html::image('assets/images/bookLogo.png', '', ['class' => 'img-logo-book']) }}<br>
                    <p>Más de 34 millones de personas sufren rezago, analfabetismo o tienen apenas cuatro años de
                        estudio.</p>
                </div>
            </div>

        </div>
        </div>
    </section>
    @endsection