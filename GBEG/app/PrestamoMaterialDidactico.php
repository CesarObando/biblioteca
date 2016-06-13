<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestamoMaterialDidactico extends Model
{
  protected $table = 'prestamo_material_complementario';
  public $timestamps = false;
  protected $fillable = ['materialComplementario','nombreSolicitante','condicion','finesPrestamo','fecha','hora','prestamo_material_complementariocol'];
}
