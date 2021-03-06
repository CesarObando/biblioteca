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
    <h1>Audiovisuales Eliminados</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Estado</th>
        </tr>
      </thead>
      @foreach($audiovisuales as $audiovisual)
      <tbody>
        <tr>
          <td>{{$audiovisual->equipo}}</td>
          <td>{{$audiovisual->marca}}</td>
          <td>{{$audiovisual->modelo}}</td>
          <td>{{$audiovisual->numeroSerie}}</td>
          @if($audiovisual->descartado===0)
          <td>Disponible</td>
          @else
          <td>Descartado</td>
          @endif
        </tr>
      </tbody>
      @endforeach
    </table>
    <br>
    <br>
  </div>
</body>

</html>
