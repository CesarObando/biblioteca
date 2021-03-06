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
    <h1>Préstamos de Audiovisuales Terminados</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      @foreach($prestamosAudiovisual as $prestamoAudiovisual)
      <tbody>
        <tr>
          <td>{{$prestamoAudiovisual->nombreSolicitante}}</td>
          <td>{{$prestamoAudiovisual->equipo}}</td>
          <td>{{$prestamoAudiovisual->marca}}</td>
          <td>{{$prestamoAudiovisual->modelo}}</td>
          <td>{{$prestamoAudiovisual->numeroSerie}}</td>
          <td>{{$prestamoAudiovisual->fecha}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <br>
    <br>
  </div>
</body>

</html>
