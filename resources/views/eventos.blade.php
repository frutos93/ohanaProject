@extends('layouts.layout')

@section('content')
<style>

        .roundTable {
            border-radius: 20px;
            background:  green;
            width: 600px;
            height: 150px;
        }


        .titulo {
            padding: 10px;
            color: white;

        }

        .info {
            padding: 10px;
            color: white;
            background-color: #73AD21;
        }
        .nombreEvento {
            padding: 10px;
            color: black;
            text-align: center;
            background-color: white;
            border-radius: 20px;
            font-size: 30px;
        }

        .wrapper {
             text-align: center;
        }

        .button {
            position: absolute;
            top: 50%;
        }




    </style>

<section id="eventos" class="content-blue">
<div class="container">
    <div class="row page-header text-center">
        <h1>Eventos</h1>
    </div>
    <table align="center" class="roundTable">
        <tr>
            <th class="nombreEvento">Campamento Ohana</th>
        </tr>
        
            <th class="titulo">Detalles</th>
        </tr>
        <tr>
            <td class="info">Campamento de verano donde replicamos un modelo de desarrollo de competencias, consolidado por el aprendizaje conjunto e incluyente de las diferentes comunidades e instituciones del país.</td>
        </tr>
        <tr>
            <td class="info">Alcance-100 niños en cada edición,dirigido a niños de casas hogar y situaciones vulnerables. Entre los 6 y los 12 años.</td>
        </tr>

        
    </table>
    <br>
    <br>
    <br>
    <table align="center" class="roundTable">
        <tr>
            <th class="nombreEvento">Verano Ohana</th>
        </tr>
        
            <th class="titulo">Detalles</th>
        </tr>
        <tr>
            <td class="info">Campamento de verano donde tiene como objetivo formar niños como agentes de cambio, consolidado por el aprendizaje conjunto e incluyente de las diferentes comunidades e instituciones del país</td>
        </tr>
        <tr>
            <td class="info">Alcance-100 niños en cada edición,dirigido a niños de casas hogar y situaciones vulnerables. Entre los 6 y los 12 años.</td>
        </tr>
        
    </table>
    <br>
    <br>
    <br>
    <table align="center" class="roundTable">
        <tr>
            <th class="nombreEvento">Ohanapoly</th>
        </tr>
        
            <th class="titulo">Detalles</th>
        </tr>
        <tr>
            <td class="info">Con este evento buscamos expandir los horizontes de los niños, mostrándoles otros países y culturas para así despertar su interés por aprender cosas nuevas y diferentes a las que ven en México, además de ubicarse a sí mismos como ciudadanos de entorno globalizado. Además este evento tiene un enfoque artístico por lo que les enseñamos sobre el arte y la cultura de distintos países.</td>
        </tr>
        <tr>
            <td class="info">Alcance - 50 niños por edición, dirigido a niños de casas hogar y situaciones vulnerables.</td>
        </tr>
        
    </table>
    <br>
    <br>
    <br>
    <table align="center" class="roundTable">
        <tr>
            <th class="nombreEvento">Ohana Inc.</th>
        </tr>
        
            <th class="titulo">Detalles</th>
        </tr>
        <tr>
            <td class="info">Con este evento buscamos fomentar el emprendimiento, la creatividad, el trabajo en equipo y la comunicación. Los niños en equipo emprenden y desarrollan su propia empresa, aprendiendo sobre la ecología y produciendo así productos con material reciclado, así mismo los concientizamos sobre la ecología.</td>
        </tr>
        <tr>
            <td class="info">Alcance - 50 niños por edición, dirigido a niños de casas hogar y situaciones vulnerables entre los 7 y los 12 años.</td>
        </tr>
        
    </table>
</div>
</section>


@endsection