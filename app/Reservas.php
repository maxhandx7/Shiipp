<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $fillable = [
        'Destino', 'Empresa', 'FechaSalida', 'HoraSalida', 'CC_Pasajero', 'Nom_Pasajero', 'Ape_Pasajero', 'Email_Pasajero', 'Tel_Pasajero', 'Cupos_reserva'
    ];
}
