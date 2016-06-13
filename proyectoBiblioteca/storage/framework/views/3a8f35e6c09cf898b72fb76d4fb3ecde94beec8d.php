<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Materiales didacticos</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Especificación</th>
          <th>Numero de Serie</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($materialesDidacticos as $materialDidactico): ?>
        <tr>
          <td><?php echo e($materialDidactico->nombre); ?></td>
          <td><?php echo e($materialDidactico->marca); ?></td>
          <td><?php echo e($materialDidactico->especificacion); ?></td>
          <td><?php echo e($materialDidactico->numeroSerie); ?></td>
          <td>

            <?php if($materialDidactico->prestado===0): ?>
            <td>Disponible</td>
            <?php else: ?>
            <td>Prestado</td>
            <?php endif; ?>
            <td>
              <?php if($materialDidactico->prestado===1): ?>
              <?php echo link_to_route('materialDidactico.edit', $title = 'Editar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

              <?php echo link_to_action('MaterialDidacticoController@eliminar', $title = 'Eliminar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-danger btn-sm']); ?>

              <?php else: ?>
              <?php echo link_to_action('PrestamoMaterialDidacticoController@show', $title = 'Prestar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

              <?php echo link_to_route('materialDidactico.edit', $title = 'Editar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

              <?php echo link_to_action('MaterialDidacticoController@eliminar', $title = 'Eliminar', $parameters = $materialDidactico->id, $attributes = ['class'=>'btn-danger btn-sm']); ?>

              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </form>
    <?php echo link_to_action('MaterialDidacticoController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

    <br>
    <br>

  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>