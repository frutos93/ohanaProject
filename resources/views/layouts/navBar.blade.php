    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/home"><img src="{{asset('assets/images/OhanaLogoo.png')}}"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/home">Ohana</a></li>
            <li><a href="/estadisticas">Datos de México</a></li>
            <li><a href="/gallery">Galeria</a></li>
            <li><a href="/eventos">Eventos</a></li>
            <li><a href="/participa">Participa con nosotros</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/about">Historia</a></li>

            @if (Auth()->user()->rol == 2)
              <li><a href="/evento">Administrar Evento</a></li>
            @endif
        </ul>
        </div>
    </nav>
