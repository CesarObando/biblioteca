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
                                <th>Autor</th>
                                <th>Título</th>
                                <th>Fecha de préstamo</th>
                                <th>Vence</th>
                                <th>Nombre del solicitante</th>
                                <th>Correo Electrónico</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Sección</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Est.Sociales</td>
                                <td>Santillana</td>
                                <td>Historia de Costa Rica</td>
                                <td>05/04/2016</td>
                                <td>07/04/2016</td>
                                <td>Jonathan Bonilla</td>
                                <td>jona@gmail.com</td>
                                <td>88885555</td>
                                <td>De la iglesia de Paraíso 300 metros al norte y 75 metros al este.</td>
                                <td>6-2</td>
                                <td><a href="listarPrestamoLibrosEstudiante.html" class="btn-danger btn-sm">Terminar préstamo</a> </td>
                            </tr>

                        </tbody>
                    </table>
                </form>
                <br>
                <br>

            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>