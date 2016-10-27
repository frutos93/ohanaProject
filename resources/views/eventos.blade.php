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




    </style>


<div class="container">
    <h1 align="center">Eventos</h1>
    <table align="center" class="roundTable">
        <tr>
            <th class="nombreEvento">Ohana Fest</th>
        </tr>
        <tr>
            <th class="titulo">Fecha</th>
        </tr>
        <tr>
            <td class="info">Junio 26, 2016</td>
        </tr>
        <tr>
            <th class="titulo">Ubicación</th>
        </tr>
        <tr>
            <td class="info" >Parque Fundidora</td>
        </tr>
        <tr>
            <th class="titulo">Detalles</th>
        </tr>
        <tr>
            <td class="info">PLorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
        </tr>
        <th class="titulo">Costo</th>
        </tr>
        <tr>
            <td class="info">$100</td>
        </tr>
        <th id="button"> <button  name="Enviar" type="submit" id="contact-submit" data-submit="...Sending">Registrarse</button></t>
            </tr>

    </table>
</div>


@endsection