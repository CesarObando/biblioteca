<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamos de la sala de audiovisuales</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Tema</th>
          <th>Fecha</th>
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Acciones</th>
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
          <td><?php echo link_to_action('SalaAudiovisualesController@terminarPrestamo', $title = 'Terminar', $parameters = $prestamoSalaAudiovisual->id, $attributes = ['class'=>'btn-danger btn-sm']); ?></td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </form>
  <?php echo link_to_action('SalaAudiovisualesController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>