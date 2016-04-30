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
                                <th>Fecha</th>
                                <th>Editorial</th>
                                <th>Año</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Est.Sociales</td>
                                <td>4521</td>
                                <td>Jiménez Floria</td>
                                <td>Historia de Costa Rica</td>
                                <td>05/04/2016</td>
                                <td>Santillana</td>
                                <td>2000</td>
                                <td><a href="<?php echo URL::to("libro/editar"); ?>" class="btn-warning btn-sm">Editar</a>&nbsp;<a href="<?php echo URL::to("libro/prestarEstudiante"); ?>" class="btn-warning btn-sm">Prestar a Estudiante</a>
                                    <br><br><a class="btn-danger btn-sm">Eliminar</a>&nbsp;<a href="<?php echo URL::to("libro/prestarDocente"); ?>" class="btn-warning btn-sm">Prestar a Profesor</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>