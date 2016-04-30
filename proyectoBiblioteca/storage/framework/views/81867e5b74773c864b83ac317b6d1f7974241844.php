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
                                <th>Docente</th>
                                <th>Fecha</th>
                                <th>Hora de entrada</th>
                                <th>Hora de salida</th>
                                <th>Tema</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cesar Obando Solano</td>
                                <td>10/04/2016</td>
                                <td>10:00 a.m.</td>
                                <td>11:00 a.m.</td>
                                <td>Batalla de Rivas</td>
                                <td><a class="btn-danger btn-sm">Terminar préstamo</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>