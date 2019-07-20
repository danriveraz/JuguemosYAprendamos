<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    public $table = "estadisticas";
    protected $fillable = ['primerIntentoBuenos', 'primerIntentoFallos', 'penultimoIntentoBuenos', 'penultimoIntentoFallos', 'ultimoIntentoBuenos', 'ultimoIntentoFallos', 'nNivel', 'idUser', 'idPaciente'];

    public function scopeSearch($query, $idPaciente, $idUser, $nNivel){
      return $query->where('idPaciente', '=', $idPaciente)
      				->where('idUser', '=', $idUser)
      				->where('nNivel', '=', $nNivel);
    }
}
