<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	public $table = "paciente";
    protected $fillable = ['password', 'nombreCompleto', 'edad', 'nombreAcudiente', 'parentezco', 'telefonoAcudiente', 'direccionAcudiente'];
}
