<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinos extends Model
{
    protected $fillable = [
        'Nombre', 'Empresa', 'FechaSalida', 'HoraSalida', 'Cupos', 'Valor',
    ];
}
