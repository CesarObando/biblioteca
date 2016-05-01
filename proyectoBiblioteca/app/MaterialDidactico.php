<?php

namespace gestorBiblioteca;

use Illuminate\Database\Eloquent\Model;

class MaterialDidactico extends Model
{
  protected $table = 'material_complementario';
  public $timestamps = false;
  protected $fillable = ['nombre','marca','especificacion','numeroSerie'];
}
