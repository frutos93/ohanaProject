

<style>
    .navbar{
        padding:1%;
    }
</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/OhanaLogoo.png')}}"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Ohana</a></li>
            <li><a href="{{ url('/estadisticas') }}">Datos de México</a></li>
            <li><a href="{{ url('/galeria') }}">Galeria</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Participa con nosotros</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
        </ul>
    </div>
</nav>
