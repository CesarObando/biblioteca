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
          <th>Equipo</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Serie</th>
          <th>Estado</th>
          <th>Acciones</th>

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

          <td>

            <?php if($audiovisual->prestado===1): ?>
            <?php echo link_to_route('audiovisual.edit', $title = 'Editar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

            <?php echo link_to_action('AudiovisualController@eliminar', $title = 'Eliminar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-danger btn-sm']); ?>

            <?php else: ?>
            <?php echo link_to_route('audiovisual.edit', $title = 'Editar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

            <?php echo link_to_action('PrestamoAudiovisualController@show', $title = 'Prestar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

            <?php echo link_to_action('AudiovisualController@eliminar', $title = 'Eliminar', $parameters = $audiovisual->id, $attributes = ['class'=>'btn-danger btn-sm']); ?>

            <?php endif; ?>


          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </form>
  <?php echo link_to_action('AudiovisualController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>