<link href="css/app.css" rel="stylesheet">
@extends('layouts.layout')

@section('content')

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from previously active menu item
        $('#participa').addClass('active');
    });
</script>

<section id="participa-permanente" class="img-background2">
    <div class="container">
        <div class="row page-header text-center">
            <h1>
                Voluntario permanente
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h3>
                   En Ohana estamos buscando voluntarios comprometidos con crear un cambio, envíanos tus datos y buscaremos la mejor sede para ti.
                </h3>
            </div>
        </div>
    </div>
</section>

<section id="participa-unica" class="content-blue">
    <div class="container">
        <div class="row page-header text-center">
            <h2>
                Actividad única
            </h2>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"> 
                
                <br>
                <h3>
                    ¿Tienes una idea que te gustaría desarrollar pero no sabes por dónde empezar? Envíanos tus datos y juntos crearemos un proyecto único.
                </h3>
            </div>
        </div>
    </div>
</section>

<section id="participa-nueva" class="img-background3">
    <div class="container">
        <div class="row page-header text-center">
            <h1>
                Nueva alianza
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"> 
                
                <br>
                <h3>
                    Si eres una asociación civil, un grupo, una familia o solo quieres crear un cambio, envíanos tus datos y buscaremos crear una alianza.
                </h3>
            </div>
        </div>
    </div>
</section>

<section id="participa-capitulo" class="content-green">
    <div class="container">
        <div class="row page-header text-center">
            <h1>
                Abrir un capítulo
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"> 
                
                <br>
                <h3>
                    Si eres un estudiante y en tu Universidad o Prepa no tienes a Ohana como capítulo estudiantil, envíanos tu nombre, el nombre de tu universidad o preparatoria, grado escolar, y estado de residencia. Nosotros nos pondremos en contacto.
                </h3>
            </div>
        </div>
    </div>
</section>

<section id="participa-empresa" class="img-background">
    <div class="container">
        <div class="row page-header text-center">
            <h1>
                Empresa
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h3>
                    Si eres una empresa y deseas participar con nosotros, envianos tus datos, nombre de la empresa, responsable, idea a desarrollar, etc...

                </h3>
            </div>
        </div>
    </div>
</section>

    @endsection