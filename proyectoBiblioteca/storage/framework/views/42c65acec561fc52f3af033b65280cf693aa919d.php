<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamo de libros a estudiantes</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del solicitante</th>
          <th>Correo Electrónico</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Sección</th>
          <th>Número de Inscripción</th>
          <th>Título</th>
          <th>Fecha de préstamo</th>
          <th>Vence</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <?php foreach($prestamosLibroEstudiante as $prestamo): ?>
      <tbody>
        <tr>
          <td><?php echo e($prestamo->nombreSolicitante); ?></td>
          <td><?php echo e($prestamo->correoSolicitante); ?></td>
          <td><?php echo e($prestamo->telefonoSolicitante); ?></td>
          <td><?php echo e($prestamo->direccionSolicitante); ?></td>
          <td><?php echo e($prestamo->seccionSolicitante); ?></td>
          <td><?php echo e($prestamo->numeroInscripcion); ?></td>
          <td><?php echo e($prestamo->titulo); ?></td>
          <td><?php echo e($prestamo->fechaPrestamo); ?></td>
          <td><?php echo e($prestamo->fechaVencimiento); ?></td>
          <td><?php echo link_to_action('PrestamoLibroEstudianteController@eliminarPrestamo', $title = 'Terminar', $parameters = $prestamo->id, $attributes = ['class'=>'btn-danger btn-sm']); ?></td>
        </tr>

      </tbody>
      <?php endforeach; ?>
    </table>
  </form>
  <?php echo link_to_action('PrestamoLibroEstudianteController@generarReporte', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>