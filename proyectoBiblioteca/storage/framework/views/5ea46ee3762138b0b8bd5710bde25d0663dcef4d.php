<?php $__env->startSection('content'); ?>
<div class="container">
            <h1>Préstamo de material didactico</h1>
            <br>
            <form name="prestamoDidactico" action="listarPrestamoDidactico.html">
                <label for="nombreSolicitante">Nombre del solicitante:</label>
                <input type="text" class="form-control" name="nombreSolicitante" id="signatura" required="">
                <br>
                <label for="condicion">Condición:</label>
                <select name="condicion" id="condicion" class="form-control" required="" onchange="especificarOtraCondicion()">
                    <option value="">Seleccione la condición del solicitante</option>
                    <option value="1">Docente</option>
                    <option value="2">Administrativo</option>
                    <option value="3">Estudiante</option>
                    <option value="4">Otro</option>
                </select>
                <label for="otro" id="l_otracondicion" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otracondicion" id="otracondicion" style="visibility: hidden">
                <br>
                <label for="equipo">Equipo:</label>
                <select name="equipo" id="equipo" class="form-control" required="" onchange="especificarOtroEquipo()">
                    <option value="">Seleccione el material didactico</option>
                    <option value="1">Mapa</option>
                    <option value="2">Juego</option>
                    <option value="3">Abaco</option>
                    <option value="4">Lapices y lapiceros</option>
                    <option value="5">Laminas educativas</option>
                    <option value="6">Otro</option>
                </select>
                <label for="otro" id="l_otro" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otro" id="otro" style="visibility: hidden">
                <br>
                <label for="finalidad">Fines del préstamo:</label>
                <select name="finalidad" id="finalidad" class="form-control" required="" onchange="especificarOtroMotivo()">
                    <option value="">Seleccione el equipo</option>
                    <option value="1">Desarollo curricular</option>
                    <option value="2">Reunión de padres de familia</option>
                    <option value="3">Escuela de padres</option>
                    <option value="4">Capacitación docente</option>
                    <option value="5">Consejo de profesores</option>
                    <option value="6">Otro</option>
                </select>
                <label for="otromotivo" id="l_otromotivo" style="visibility: hidden">Otro:</label>
                <input type="text" class="form-control" name="otromotivo" id="otromotivo" style="visibility: hidden">
                <br>
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" required="">
                <br>
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" name="hora" required="">
                <hr>
                <input type="submit" name="prestamoDidactico" value="Préstamo" class="btn-success btn-lg">
                <br><br>
            </form>
            <script>
                function especificarOtroEquipo(){
                    opcion = document.getElementById("equipo");
                    if(opcion.value === "6"){
                        document.getElementById("l_otro").setAttribute("style","visibility: visible");
                        document.getElementById("otro").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otro").setAttribute("style","visibility: hidden");
                        document.getElementById("otro").setAttribute("style","visibility: hidden");
                    }
                }
                function especificarOtroMotivo(){
                    opcion = document.getElementById("finalidad");
                    if(opcion.value === "6"){
                        document.getElementById("l_otromotivo").setAttribute("style","visibility: visible");
                        document.getElementById("otromotivo").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otromotivo").setAttribute("style","visibility: hidden");
                        document.getElementById("otromotivo").setAttribute("style","visibility: hidden");
                    }
                }
                function especificarOtraCondicion(){
                    opcion = document.getElementById("condicion");
                    if(opcion.value === "4"){
                        document.getElementById("l_otracondicion").setAttribute("style","visibility: visible");
                        document.getElementById("otracondicion").setAttribute("style","visibility: visible");
                    }else{
                        document.getElementById("l_otracondicion").setAttribute("style","visibility: hidden");
                        document.getElementById("otracondicion").setAttribute("style","visibility: hidden");
                    }
                }
            </script>
        </div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>