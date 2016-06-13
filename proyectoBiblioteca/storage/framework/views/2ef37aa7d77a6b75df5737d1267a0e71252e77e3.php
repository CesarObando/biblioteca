<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Libros</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Signatura</th>
          <th>No. de Inscripción</th>
          <th>Autor</th>
          <th>Título</th>
          <th>Edicón</th>
          <th>Fecha</th>
          <th>Lugar</th>
          <th>Editorial</th>
          <th>Año</th>
          <th>Observaciones</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <?php foreach($libros as $libro): ?>
      <tbody>
        <tr>
          <td><?php echo e($libro->signatura); ?></td>
          <td><?php echo e($libro->numeroInscripcion); ?></td>
          <td><?php echo e($libro->autor); ?></td>
          <td><?php echo e($libro->titulo); ?></td>
          <td><?php echo e($libro->edicion); ?></td>
          <td><?php echo e($libro->fecha); ?></td>
          <td><?php echo e($libro->lugar); ?></td>
          <td><?php echo e($libro->editorial); ?></td>
          <td><?php echo e($libro->ano); ?></td>
          <td><?php echo e($libro->observaciones); ?></td>
          <?php if($libro->prestado===0): ?>
          <td>Disponible</td>
          <?php else: ?>
          <td>Prestado</td>
          <?php endif; ?>
          <td>
            <?php if($libro->prestado===1): ?>
            <?php echo link_to_route('libro.edit', $title = 'Editar', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm']); ?>

            <?php echo link_to_action('LibroController@eliminar', $title = 'Eliminar', $parameters = $libro->id, $attributes = ['class'=>'btn-danger btn-sm']); ?>

            <?php else: ?>
            <?php echo link_to_route('libro.edit', $title = 'Editar', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm']); ?><hr>
            <?php echo link_to_action('PrestamoLibroDocenteController@mostrar', $title = 'Prestar Docente', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm']); ?><hr>
            <?php echo link_to_action('PrestamoLibroEstudianteController@mostrar', $title = 'Prestar Estudiante', $parameters = $libro->id, $attributes = ['class'=>'btn-warning btn-sm']); ?><hr>
            <?php echo link_to_action('LibroController@eliminar', $title = 'Eliminar', $parameters = $libro->id, $attributes = ['class'=>'btn-danger btn-sm']); ?>

            <?php endif; ?>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </form>
  <?php echo link_to_action('LibroController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>