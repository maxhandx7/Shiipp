<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Destino');
            $table->string('Empresa');
            $table->date('FechaSalida');
            $table->time('HoraSalida');
            $table->integer('CC_Pasajero');
            $table->string('Nom_Pasajero');
            $table->string('Ape_Pasajero');
            $table->string('Email_Pasajero');
            $table->string('Tel_Pasajero');
            $table->integer('Cupos_reserva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
