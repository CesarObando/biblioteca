<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Audiovisuales</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      <?php foreach($prestamosAudiovisualTerminados as $prestamoAudiovisual): ?>
      <tbody>
        <tr>
          <td><?php echo e($prestamoAudiovisual->nombreSolicitante); ?></td>
          <td><?php echo e($prestamoAudiovisual->equipo); ?></td>
          <td><?php echo e($prestamoAudiovisual->marca); ?></td>
          <td><?php echo e($prestamoAudiovisual->modelo); ?></td>
          <td><?php echo e($prestamoAudiovisual->numeroSerie); ?></td>
          <td><?php echo e($prestamoAudiovisual->fecha); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </form>
  <?php echo link_to_action('PrestamoAudiovisualController@generarReporteTerminados', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>