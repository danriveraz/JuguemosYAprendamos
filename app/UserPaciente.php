<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPaciente extends Model
{
    public $table = "userpaciente";
    protected $fillable = ['idPAciente', 'idUser'];

    public function scopeSearch($query, $id){
      return $query->where('id', '=', $id);
    }

    public function scopeSearchPacientes($query, $id){
        return $query->where('idUser', '=', $id);
    }
}
