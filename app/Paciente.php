<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	public $table = "paciente";
    protected $fillable = ['nombreCompleto', 'edad', 'nombreAcudiente', 'parentezco', 'telefonoAcudiente', 'direccionAcudiente'];

    public function scopeSearch($query, $id){
      return $query->where('id', '=', $id);
    }
}
