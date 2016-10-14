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
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
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
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                </p>
            </div>
            <div class="col-md-4 text-center">
            {{ Html::image('assets/images/schoolLogo.png', '', ['class' => 'img-logo-book']) }}<br>
                <h2>
                    Trabajo
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
                </p>
            </div>
            <div class="col-md-4 text-center">
                {{ Html::image('assets/images/pencilLogo.png', '', ['class' => 'img-logo-book']) }}
                <br>
                <h2>
                    Educacion
                </h2>
                <p>
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris.
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
                Nuestro trabajo es:
                </h2>
                <br>
                <ul>
                  <li><h4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh<h4></li><br>
                  <li><h4>tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod<h4></li><br>
                  <li><h4>tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod<h4></li><br>
                </ul>
            </div>
        </div>
    </div>
</section>

    @endsection