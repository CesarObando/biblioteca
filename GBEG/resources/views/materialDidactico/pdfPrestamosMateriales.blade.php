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
    <h1>Préstamo de la sala de audiovisuales</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      <tbody>
        @foreach($prestamosMaterialDidactico as $prestamoMaterialDidactico)
        <tr>
          <td>{{$prestamoMaterialDidactico->nombreSolicitante}}</td>
          <td>{{$prestamoMaterialDidactico->nombre}}</td>
          <td>{{$prestamoMaterialDidactico->marca}}</td>
          <td>{{$prestamoMaterialDidactico->especificacion}}</td>
          <td>{{$prestamoMaterialDidactico->numeroSerie}}</td>
          <td>{{$prestamoMaterialDidactico->fecha}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <br>
    <br>
  </div>
</body>

</html>
