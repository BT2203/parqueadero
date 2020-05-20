<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['idParqueadero','nombre_apellido','telefono','idTipodoc','nrodocumento'];
}
