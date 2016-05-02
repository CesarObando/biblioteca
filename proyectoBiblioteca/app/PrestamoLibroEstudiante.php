<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class PrestamoLibroEstudiante extends Model
{
    protected $table = 'prestamo_libro_estudiante';
    protected $fillable = ['libro','fechaPrestamo','fechaVencimiento','nombreSolicitante','correoSolicitante','telefonoSolicitante','direccionSolicitante','seccionSolicitante','terminado'];
}
