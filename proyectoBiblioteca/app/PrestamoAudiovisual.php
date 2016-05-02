<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class PrestamoAudiovisual extends Model
{
    protected $table = 'prestamo_audiovisual';
    protected $fillable = ['idaudiovisual','nombreSolicitante','condicion','finesPrestamo','fecha','hora','terminado'];
}
