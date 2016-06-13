<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamos del servicio de Internet</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Sección</th>
          <th>Tema</th>
          <th>Fecha</th>
          <th>Hora de entrada</th>
          <th>Hora de salida</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($prestamosInternet as $prestamoInternet): ?>
        <tr>
          <td><?php echo e($prestamoInternet->nombreSolicitante); ?></td>
          <td><?php echo e($prestamoInternet->seccion); ?></td>
          <td><?php echo e($prestamoInternet->tema); ?></td>
          <td><?php echo e($prestamoInternet->fecha); ?></td>
          <td><?php echo e($prestamoInternet->horaEntrada); ?></td>
          <td><?php echo e($prestamoInternet->horaSalida); ?></td>
          <td><?php echo link_to_action('ServicioInternetController@terminarPrestamo', $title = 'Terminar', $parameters = $prestamoInternet->id, $attributes = ['class'=>'btn-danger btn-sm']); ?> </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </form>
  <?php echo link_to_action('ServicioInternetController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>