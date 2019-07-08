<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Paciente;

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

        //dd($pacientes[1]->id);
        
        return view('paciente.index')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        $paciente = new Paciente();
        $paciente->nombrePaciente = $request->nombrePaciente;
        $paciente->idPaciente = 0;
        $paciente->edad = $request->edad;
        $paciente->evaluacionMedica = "";
        $paciente->nombreAcudiente = $request->nombreAcudiente;
        $paciente->idAcudiente = 0;
        $paciente->parentezco = $request->parentezco;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;
        $paciente->ciudad = "";


        $paciente->save();
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
        $paciente->idPaciente = "";
        $paciente->edad = $request->edad;
        $paciente->evaluacionMedica = "";
        $paciente->nombreAcudiente = $request->nombreAcudiente;
        $paciente->idAcudiente = "";
        $paciente->parentezco = $request->parentezco;
        $paciente->telefono = $request->telefono;
        $paciente->direccion = $request->direccion;
        $paciente->ciudad = "";


        $paciente->save();

        return redirect('paciente');
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

        return redirect('paciente');
    }
}
