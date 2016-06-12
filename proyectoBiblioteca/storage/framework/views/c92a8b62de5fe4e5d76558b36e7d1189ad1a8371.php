<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Gestor Bibliotecario</title>

  <?php echo Html::style("css/bootstrap.min.css"); ?>

  <?php echo Html::style("css/font-awesome.min.css"); ?>

  <?php echo Html::style("css/animate.css"); ?>

  <?php echo Html::style("/css/animate.min.css"); ?>

  <?php echo Html::style("/css/style.css"); ?>


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

          <?php echo Html::image('img/logo.jpe',null,['width'=>'76','height'=>'85']); ?>

        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">

            <ul class="nav nav-tabs" role="tablist">
              <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
              <li role="presentation"><a href="<?php echo URL::to("/"); ?>" class="active">Inicio</a></li>
              <li role="presentation">
                <a>Libro</a>
                <ul>
                  <li role="presentation"><a href="<?php echo URL::to("libro/insertar"); ?>">Insertar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("libro/buscar"); ?>">Prestar/Modificar/Eliminar</a></li>
                  <li role="presentation">
                    <a>Ver Préstamos</a>
                    <ul>
                      <li role="presentation"><a href="<?php echo URL::to("libro/buscarPrestamosDocente"); ?>">Docente</a></li>
                      <li role="presentation"><a href="<?php echo URL::to("libro/buscarPrestamosEstudiante"); ?>">Estudiante</a></li>
                    </ul>
                  </li>
                  <li role="presentation">
                    <a>Ver Préstamos Terminados</a>
                    <ul>
                      <li role="presentation"><a href="<?php echo URL::to("libro/buscarPrestamosDocenteTerminados"); ?>">Docente</a></li>
                      <li role="presentation"><a href="<?php echo URL::to("libro/buscarPrestamosEstudianteTerminados"); ?>">Estudiante</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li role="presentation">
                <a>Audiovisual</a>
                <ul class="main-menu">
                  <li role="presentation"><a href="<?php echo URL::to("audiovisual/insertar"); ?>">Insertar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("audiovisual/buscar"); ?>">Prestar/Modificar/Eliminar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("audiovisual/buscarPrestamos"); ?>">Ver Préstamos</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("audiovisual/buscarPrestamosTerminados"); ?>">Ver Préstamos Terminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Material Didáctico</a>
                <ul>
                  <li role="presentation"><a href="<?php echo URL::to("materialDidactico/insertar"); ?>">Insertar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("materialDidactico/buscar"); ?>">Prestar/Modificar/Eliminar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("materialDidactico/buscarPrestamos"); ?>">Ver Préstamos</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("materialDidactico/buscarPrestamosTerminados"); ?>">Ver Préstamos Terminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Sala de Audiovisuales</a>
                <ul>
                  <li role="presentation"><a href="<?php echo URL::to("salaAudiovisuales/show"); ?>">Prestar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("salaAudiovisuales/buscarPrestamos"); ?>">Ver Préstamos</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("salaAudiovisuales/buscarPrestamosTerminados"); ?>">Ver Préstamos Terminados</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a>Servicio de Internet</a>
                <ul>
                  <li role="presentation"><a href="<?php echo URL::to("servicioInternet/prestar"); ?>">Prestar</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("servicioInternet/buscarPrestamos"); ?>">Ver Préstamos</a></li>
                  <li role="presentation"><a href="<?php echo URL::to("servicioInternet/buscarPrestamosTerminados"); ?>">Ver Préstamos Terminados</a></li>
                </ul>
              </li>
              <!-- <?php if(Auth::guest()): ?>-->
                    <li><a href="<?php echo e(url('/login')); ?>">Iniciar Sesión</a></li>

              <!--  <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                <?php endif; ?>-->
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
  <?php echo $__env->yieldContent('content'); ?>
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
