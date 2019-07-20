<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Paciente;
use App\Estadisticas;
use App\User;

class EstadisticasController extends Controller
{
    public function index()
    {
    	$userActual = \Auth::user();
        $idUser = $userActual->id;

        $pacientes = Paciente::orderBy('nombrePaciente','ASC')->get();
        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }
        
        $existe = Estadisticas::Search($idPaciente, $idUser, $nNivel)->get()->first();

        $primerIntentoBuenos = 0;
        $primerIntentoFallos = 0;
        $penultimoIntentoBuenos = 0;
        $penultimoIntentoFallos = 0;
        $ultimoIntentoBuenos = 0;
        $ultimoIntentoFallos = 0;

        if($existe != null){
        	$primerIntentoBuenos = $existe->primerIntentoBuenos;
        	$primerIntentoFallos = $existe->primerIntentoFallos;
	        $penultimoIntentoBuenos = $existe->penultimoIntentoBuenos;
	        $penultimoIntentoFallos = $existe->penultimoIntentoFallos;
	        $ultimoIntentoBuenos = $existe->ultimoIntentoBuenos;
	        $ultimoIntentoFallos = $existe->ultimoIntentoFallos;
        }
    }
}
