<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiovisual extends Model
{
    protected $table = 'audiovisual';

    protected $fillable = ['equipo','marca','modelo','numeroSerie','descartado','prestado'];
}
