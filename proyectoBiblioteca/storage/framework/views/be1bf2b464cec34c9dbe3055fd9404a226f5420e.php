<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
  <br>
  <br>
  <h1>Préstamo de libros a docentes terminados</h1>
  <br>
  <form>
    <table class="table table-condensed table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>Nombre del docente</th>
          <th>Sección</th>
          <th>Materia</th>
          <th>Número de inscripción</th>
          <th>Título</th>
          <th>Fecha de préstamo</th>
        </tr>
      </thead>
      <?php foreach($prestamosLibroDocente as $prestamo): ?>
      <tbody>
        <tr>
          <td><?php echo e($prestamo->nombreSolicitante); ?></td>
          <td><?php echo e($prestamo->seccion); ?></td>
          <td><?php echo e($prestamo->materia); ?></td>
          <td><?php echo e($prestamo->numeroInscripcion); ?></td>
          <td><?php echo e($prestamo->titulo); ?></td>
          <td><?php echo e($prestamo->fecha); ?></td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </form>
  <?php echo link_to_action('PrestamoLibroDocenteController@generarReporteTerminados', $title = 'Generar Reporte', $parameters = null, $attributes = ['class'=>'btn-success btn-lg']); ?>

  <br>
  <br>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>