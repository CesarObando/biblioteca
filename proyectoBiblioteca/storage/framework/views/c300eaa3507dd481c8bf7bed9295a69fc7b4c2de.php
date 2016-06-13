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
          <th>Nombre del solicitante</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($prestamosMaterialDidactico as $prestamoMaterialDidactico): ?>
        <tr>
          <td><?php echo e($prestamoMaterialDidactico->nombreSolicitante); ?></td>
          <td><?php echo e($prestamoMaterialDidactico->nombre); ?></td>
          <td><?php echo e($prestamoMaterialDidactico->marca); ?></td>
          <td><?php echo e($prestamoMaterialDidactico->especificacion); ?></td>
          <td><?php echo e($prestamoMaterialDidactico->numeroSerie); ?></td>
          <td><?php echo e($prestamoMaterialDidactico->fecha); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
      <br>
      <br>
    </div>
  </body>

  </html>
