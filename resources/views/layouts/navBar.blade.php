    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="{{asset('assets/images/OhanaLogoo.png')}}"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Ohana</a></li>
            <li><a href="/estadisticas">Datos de México</a></li>
            <li><a href="/gallery">Galeria</a></li>
            <li><a href="/eventos">Eventos</a></li>
            <li><a href="#">Participa con nosotros</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>


        @if (Auth::check())
        <ul class="nav navbar-nav">

          @if (Auth()->user()->rol == 1)
            <li><a href="/evento">Administrar Eventos</a></li>
            <li><a href="/coordinadores">Coordinadores</a></li>
            <li><a href="/participantes">Participantes</a></li>
            <li><a href="/voluntarios">Voluntarios</a></li>
            <li><a href="/logout">Logout</a></li>
          @endif

          @if (Auth()->user()->rol == 2)
            <li><a href="/participantes">Registrar Niños</a></li>
            <li><a href="/voluntarios">Registrar Staff</a></li>
            <li><a href="/logout">Logout</a></li>
          @endif
        </ul>
        @endif


        </div>
    </nav>
