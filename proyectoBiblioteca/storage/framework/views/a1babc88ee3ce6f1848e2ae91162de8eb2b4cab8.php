<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamo de audiovisuales</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Condición</th>
          <th>Fines del préstamo</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <?php foreach($prestamosAudiovisual as $prestamoAudiovisual): ?>
      <tbody>
        <tr>
          <td><?php echo e($prestamoAudiovisual->nombreSolicitante); ?></td>
          <td><?php echo e($prestamoAudiovisual->condicion); ?></td>
          <td><?php echo e($prestamoAudiovisual->finesPrestamo); ?></td>
          <td><?php echo e($prestamoAudiovisual->equipo); ?></td>
          <td><?php echo e($prestamoAudiovisual->marca); ?></td>
          <td><?php echo e($prestamoAudiovisual->modelo); ?></td>
          <td><?php echo e($prestamoAudiovisual->numeroSerie); ?></td>
          <td><?php echo e($prestamoAudiovisual->fecha); ?></td>
          <td><?php echo link_to_action('PrestamoAudiovisualController@eliminarPrestamo', $title = 'Terminar', $parameters = $prestamoAudiovisual->id, $attributes = ['class'=>'btn-danger btn-sm']); ?> </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <form>
      <?php echo link_to_action('PrestamoAudiovisualController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

      <br>
      <br>

    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>