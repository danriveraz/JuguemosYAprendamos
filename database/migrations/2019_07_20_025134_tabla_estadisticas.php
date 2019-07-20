<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEstadisticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('primerIntentoBuenos');
            $table->integer('primerIntentoFallos');
            
            $table->integer('penultimoIntentoBuenos');
            $table->integer('penultimoIntentoFallos');

            $table->integer('ultimoIntentoBuenos');
            $table->integer('ultimoIntentoFallos');

            $table->integer('nNivel');

            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');

            $table->integer('idPaciente')->unsigned();
            $table->foreign('idPaciente')->references('id')->on('paciente');
            
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
        //
    }
}
