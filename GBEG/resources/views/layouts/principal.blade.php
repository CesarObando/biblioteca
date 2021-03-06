<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Gestor Bibliotecario</title>

  {!!Html::style("css/bootstrap.min.css")!!}
  {!!Html::style("css/font-awesome.min.css")!!}
  {!!Html::style("css/animate.css")!!}
  {!!Html::style("/css/animate.min.css")!!}
  {!!Html::style("/css/style.css")!!}

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-static-top" role="banner">

      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand" >

          </div>

          {!!Html::image('img/logo.jpe',null,['width'=>'76','height'=>'85'])!!}
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">

            <ul class="nav nav-tabs" role="tablist">
              <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
              <li role="presentation"><a href="{!!URL::to("/")!!}" class="active">Inicio</a></li>
              @if (!Auth::guest())
              <li role="presentation">
                <a>Libro</a>
                <ul>
                  <li role="presentation"><a href="{!!URL::to("libro/insertar")!!}">Insertar</a></li>
                  <li role="presentation"><a href="{!!URL::to("libro/buscar")!!}">Prestar/Modificar/Eliminar</a></li>
                  <li role="presentation">
                    <a>Ver Préstamos</a>
                    <ul>
                      <li role="presentation"><a href="{!!URL::to("libro/buscarPrestamosDocente")!!}">Docente</a></li>
                      <li role="presentation"><a href="{!!URL::to("libro/buscarPrestamosEstudiante")!!}">Estudiante</a></li>
                    </ul>
                  </li>
                  <li role="presentation">
                    <a>Ver Préstamos Terminados</a>
                    <ul>
                      <li role="presentation"><a href="{!!URL::to("libro/buscarPrestamosDocenteTerminados")!!}">Docente</a></li>
                      <li role="presentation"><a href="{!!URL::to("libro/buscarPrestamosEstudianteTerminados")!!}">Estudiante</a></li>
                    </ul>
                  </li>
                  <li role="presentation"><a href="{!!URL::to("libro/listarEliminados")!!}">Ver Libros Eliminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Audiovisual</a>
                <ul class="main-menu">
                  <li role="presentation"><a href="{!!URL::to("audiovisual/insertar")!!}">Insertar</a></li>
                  <li role="presentation"><a href="{!!URL::to("audiovisual/buscar")!!}">Prestar/Modificar/Eliminar</a></li>
                  <li role="presentation"><a href="{!!URL::to("audiovisual/buscarPrestamos")!!}">Ver Préstamos</a></li>
                  <li role="presentation"><a href="{!!URL::to("audiovisual/buscarPrestamosTerminados")!!}">Ver Préstamos Terminados</a></li>
                  <li role="presentation"><a href="{!!URL::to("audiovisual/listarEliminados")!!}">Ver Audiovisuales Eliminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Material Didáctico</a>
                <ul>
                  <li role="presentation"><a href="{!!URL::to("materialDidactico/insertar")!!}">Insertar</a></li>
                  <li role="presentation"><a href="{!!URL::to("materialDidactico/buscar")!!}">Prestar/Modificar/Eliminar</a></li>
                  <li role="presentation"><a href="{!!URL::to("materialDidactico/buscarPrestamos")!!}">Ver Préstamos</a></li>
                  <li role="presentation"><a href="{!!URL::to("materialDidactico/buscarPrestamosTerminados")!!}">Ver Préstamos Terminados</a></li>
                  <li role="presentation"><a href="{!!URL::to("materialDidactico/listarEliminados")!!}">Ver Materiales Eliminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Sala de Audiovisuales</a>
                <ul>
                  <li role="presentation"><a href="{!!URL::to("salaAudiovisuales/show")!!}">Prestar</a></li>
                  <li role="presentation"><a href="{!!URL::to("salaAudiovisuales/buscarPrestamos")!!}">Ver Préstamos</a></li>
                  <li role="presentation"><a href="{!!URL::to("salaAudiovisuales/buscarPrestamosTerminados")!!}">Ver Préstamos Terminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Servicio de Internet</a>
                <ul>
                  <li role="presentation"><a href="{!!URL::to("servicioInternet/prestar")!!}">Prestar</a></li>
                  <li role="presentation"><a href="{!!URL::to("servicioInternet/buscarPrestamos")!!}">Ver Préstamos</a></li>
                  <li role="presentation"><a href="{!!URL::to("servicioInternet/buscarPrestamosTerminados")!!}">Ver Préstamos Terminados</a></li>
                </ul>
              </li>
              @endif
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                    @else
                    <li><a href="{{ url('/logout') }}">Cerrar Sesión</a></li>
                @endif
            </ul>
          </div>
        </div>
      </div><!--/.container-->
    </nav><!--/nav-->
  </header>

  <div class="container">
    <div class="text-center">
      <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
      <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
      <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
      <h2 class="h2">Biblioteca Omar Flores</h2>
      <br>
      <br>
    </div>
  </div>
  @yield('content')
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
  wow = new WOW(
    {
    })
    .init();
    </script>
  </body>
  </html>
