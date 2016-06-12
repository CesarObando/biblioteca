<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/style_table.css">
</head>
<body>
    <div class="text-center">
      <h3 class="h3">Dirección Regional de Enseñanza Cartago</h3>
      <h3 class="h3">Red de Alcance Bibliotecólogos Escolares Cartago</h3>
      <h2 class="h2">Escuela Fray José Antonio de Liendo y Goicoechea</h2>
      <h2 class="h2">Biblioteca Omar Flores</h2>
    </div>
  <div class="table-responsive container">
    <br>
    <br>
    <h1>Préstamos de libros a docentes terminados</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del docente</th>
          <th>Sección</th>
          <th>Materia</th>
          <th>Número de inscripción</th>
          <th>Título</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      @foreach($prestamosLibroDocente as $prestamo)
      <tbody>
        <tr>
          <td>{{$prestamo->nombreSolicitante}}</td>
          <td>{{$prestamo->seccion}}</td>
          <td>{{$prestamo->materia}}</td>
          <td>{{$prestamo->numeroInscripcion}}</td>
          <td>{{$prestamo->titulo}}</td>
          <td>{{$prestamo->fecha}}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
    <br>
    <br>
  </div>
</body>

</html>
