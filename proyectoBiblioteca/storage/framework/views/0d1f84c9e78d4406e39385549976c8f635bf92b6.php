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
    <h1>Préstamo de materiales didácticos</h1>
    <br>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Tema</th>
          <th>Fecha</th>
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
        </tr>
      </thead>
      <?php foreach($prestamosSalaAudiovisuales as $prestamoSalaAudiovisual): ?>
      <tbody>
        <tr>
          <td><?php echo e($prestamoSalaAudiovisual->nombreSolicitante); ?></td>
          <td><?php echo e($prestamoSalaAudiovisual->tema); ?></td>
          <td><?php echo e($prestamoSalaAudiovisual->fecha); ?></td>
          <td><?php echo e($prestamoSalaAudiovisual->horaEntrada); ?></td>
          <td><?php echo e($prestamoSalaAudiovisual->horaSalida); ?></td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
      <br>
      <br>
    </div>
  </body>

  </html>
