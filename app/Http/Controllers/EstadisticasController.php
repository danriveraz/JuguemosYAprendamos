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
        $pacientes = Paciente::orderBy('nombrePaciente','ASC')->get();
        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }
        
        return view('Estadisticas.index')
        ->with('pacientes', $pacientes)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente);
    }
}
