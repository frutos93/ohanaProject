    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navegacion">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home"><img src="{{asset('assets/images/OhanaLogoo.png')}}"></a>
        </div>
        <ul id="navegacion" class="nav navbar-nav collapse navbar-collapse">
            <li class="active"><a href="/home">Ohana</a></li>
            <li><a href="/estadisticas">Datos de México</a></li>
            <li><a href="/gallery">Galeria</a></li>
            <li><a href="/eventos">Eventos</a></li>
            <li><a href="/participa">Participa con nosotros</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/about">Historia</a></li>

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
