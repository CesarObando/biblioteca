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
    <h1>Materiales Didácticos</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Numero de Serie</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        @foreach($materialesDidacticos as $materialDidactico)
        <tr>
          <td>{{$materialDidactico->nombre}}</td>
          <td>{{$materialDidactico->marca}}</td>
          <td>{{$materialDidactico->especificacion}}</td>
          <td>{{$materialDidactico->numeroSerie}}</td>
          <td>

            @if($materialDidactico->prestado===0)
            <td>Disponible</td>
            @else
            <td>Prestado</td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      <br>
    </div>
  </body>

  </html>
