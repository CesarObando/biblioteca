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
    <h1>Libros</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>No. de Inscripción</th>
          <th>Autor</th>
          <th>Título</th>
          <th>Edicón</th>
          <th>Fecha</th>
          <th>Lugar</th>
          <th>Editorial</th>
          <th>Estado</th>
        </tr>
      </thead>
      @foreach($libros as $libro)
      <tbody>
        <tr>
          <td>{{$libro->numeroInscripcion}}</td>
          <td>{{$libro->autor}}</td>
          <td>{{$libro->titulo}}</td>
          <td>{{$libro->edicion}}</td>
          <td>{{$libro->fecha}}</td>
          <td>{{$libro->lugar}}</td>
          <td>{{$libro->editorial}}</td>
          @if($libro->prestado===0)
          <td>Disponible</td>
          @else
          <td>Prestado</td>
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
