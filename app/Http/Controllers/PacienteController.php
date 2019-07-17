<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Paciente;
use App\User;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        
        return view('paciente.index')
        ->with('pacientes', $pacientes)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        $paciente = new Paciente();
        $paciente->nombrePaciente = $request->nombrePaciente;
        $paciente->idPaciente = $request->idPaciente;
        $paciente->edad = $request->edad;
        $paciente->evaluacionMedica = $request->evaluacionMedica;
        $paciente->nombreAcudiente = $request->nombreAcudiente;
        $paciente->idAcudiente = $request->idAcudiente;
        $paciente->parentezco = $request->parentezco;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;
        $paciente->ciudad = $request->ciudad;


        $paciente->save();
        flash('Paciente creado correctamente')->success()->important();
        return redirect('paciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        $paciente->nombrePaciente = $request->nombrePaciente;
        $paciente->idPaciente = $request->idPaciente;
        $paciente->edad = $request->edad;
        $paciente->evaluacionMedica = $request->evaluacionMedica;
        $paciente->nombreAcudiente = $request->nombreAcudiente;
        $paciente->idAcudiente = $request->idAcudiente;
        $paciente->parentezco = $request->parentezco;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;
        $paciente->ciudad = $request->ciudad;


        $paciente->save();

        flash('Paciente actualizado correctamente')->success()->important();
        return redirect('paciente');
    }

    public function select(Request $request, $id)
    {
        $userActual = \Auth::user();
        $userActual->pacienteActual = $id;
        $userActual->save();

        return redirect('paciente');
    }

    public function postura($id, $level)
    {
        return view('paciente.postura')
        ->with('id',$id)
        ->with('level',$level);
    }

    public function cara($id, $level)
    {
        return view('paciente.cara')
        ->with('id',$id)
        ->with('level',$level);
    }

    public function sonido($id, $level)
    {
        return view('paciente.sonido')
        ->with('id',$id)
        ->with('level',$level);
    }

    public function palabra($id, $level)
    {
        return view('paciente.palabra')
        ->with('id',$id)
        ->with('level',$level);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        flash('Paciente eliminado correctamente')->success()->important();
        return redirect('paciente');
    }
}
