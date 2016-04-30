<?php $__env->startSection('content'); ?>
<div class="table-responsive container">
                <br>
                <br>
                <h1>Material didactico</h1>
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
                            <tr>
                                <td>Jonathan Bonilla Umaña</td>
                                <td>Mapa</td>
                                <td>d-maps</td>
                                <td>Mapa mundi</td>
                                <td>02856</td>
                                <td>05/04/2016</td>
                                <td><a href="listarPrestamoDidactico.html" class="btn-danger btn-sm">Terminar préstamo</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>