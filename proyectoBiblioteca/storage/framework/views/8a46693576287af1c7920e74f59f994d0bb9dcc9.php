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
      <?php foreach($libros as $libro): ?>
      <tbody>
        <tr>
          <td><?php echo e($libro->numeroInscripcion); ?></td>
          <td><?php echo e($libro->autor); ?></td>
          <td><?php echo e($libro->titulo); ?></td>
          <td><?php echo e($libro->edicion); ?></td>
          <td><?php echo e($libro->fecha); ?></td>
          <td><?php echo e($libro->lugar); ?></td>
          <td><?php echo e($libro->editorial); ?></td>
          <?php if($libro->prestado===0): ?>
          <td>Disponible</td>
          <?php else: ?>
          <td>Prestado</td>
          <?php endif; ?>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
    <br>
    <br>
  </div>
</body>

</html>
