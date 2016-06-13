<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Prestamos Material didactico</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Serie</th>
          <th>Fecha de préstamo</th>
          <th>Acciones</th>
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
          <td>
            <?php echo link_to_action('PrestamoMaterialDidacticoController@terminarPrestamo',
            $title = 'Terminar Prestamo',
            $parameters = $prestamoMaterialDidactico->id,
            $attributes = ['class'=>'btn-warning btn-sm']); ?>



          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </form>
  <?php echo link_to_action('PrestamoMaterialDidacticoController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>