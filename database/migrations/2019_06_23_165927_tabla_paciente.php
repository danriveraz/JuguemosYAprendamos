<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrePaciente' , 40);
            $table->bigInteger('idPaciente');
            $table->unsignedInteger('edad');
            $table->string('evaluacionMedica');
            $table->string('nombreAcudiente' , 40);
            $table->bigInteger('idAcudiente');
            $table->string('parentezco' , 40);
            $table->bigInteger('telefono');
            $table->string('direccion' , 40);
            $table->string('ciudad',40);
            
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
