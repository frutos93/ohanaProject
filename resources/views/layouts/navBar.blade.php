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
            <li id=><a href="/home">Ohana</a></li>
            <li id="estadisticas"><a href="/estadisticas">Datos de México</a></li>
            <li id="gallery"><a href="/gallery">Galeria</a></li>
            <li id="eventos"><a href="/eventos">Eventos</a></li>
            <li id="participa"><a href="/participa">Participa con nosotros</a></li>
            <li id="contacto"><a href="/contacto">Contacto</a></li>
            <li id="about"><a href="/about">Historia</a></li>

            @if (Auth::check())
                <!-- Dropdown de opciones de administrador -->
                @if (Auth()->user()->rol == 1)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Director<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/evento">Administrar Eventos</a></li>
                            <li><a href="/coordinadores">Coordinadores</a></li>
                            <li><a href="/participantes">Participantes</a></li>
                            <li><a href="/voluntarios">Voluntarios</a></li>
                            <li><a href="{{ url('/register') }}">Crear cuenta coordinador</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
                <!-- Dropdown de opciones de administrador -->
                @if (Auth()->user()->rol == 2)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coordinador<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/participantes">Registrar Niños</a></li>
                            <li><a href="/voluntarios">Registrar Staff</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            @endif

        </ul>




        </div>
    </nav>
