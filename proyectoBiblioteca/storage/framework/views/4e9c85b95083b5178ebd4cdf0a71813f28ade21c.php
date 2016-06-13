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
    <h1>Audiovisuales</h1>
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
      <?php foreach($audiovisuales as $audiovisual): ?>
      <tbody>
        <tr>
          <td><?php echo e($audiovisual->equipo); ?></td>
          <td><?php echo e($audiovisual->marca); ?></td>
          <td><?php echo e($audiovisual->modelo); ?></td>
          <td><?php echo e($audiovisual->numeroSerie); ?></td>
          <?php if($audiovisual->prestado===0): ?>
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
