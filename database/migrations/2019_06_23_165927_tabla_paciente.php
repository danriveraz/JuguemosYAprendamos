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
            $table->string('password');
            $table->string('nombreCompleto' , 40);
            $table->string('edad' , 40);
            $table->string('nombreAcudiente' , 40);
            $table->string('parentezco' , 40);
            $table->string('telefonoAcudiente' , 40);
            $table->string('direccionAcudiente' , 40);
            
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
