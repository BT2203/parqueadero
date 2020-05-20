<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleparqueo extends Model
{
    protected $fillable = ['horaentrada','horasalida','idVehiculo','idCliente'];
}
