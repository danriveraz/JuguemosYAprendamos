<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Paciente;
use App\Estadisticas;
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

        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }

        $userActual = \Auth::user();
        $userActual->pacienteActual = $id;
        $userActual->save();

        return view('paciente.palabra')
        ->with('id',$id)
        ->with('level',$level)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente);
    }

    public function createstics(Request $request, $id, $level){
        $userActual = \Auth::user();
        $idUser = $userActual->id;
        $aciertos   = $request->nAciertos;
        $fallos     = $request->nFallos;
        $nNivel     = $level;
        $idPaciente = $id;

        $existe = Estadisticas::Search($idPaciente, $idUser, $nNivel)->get()->first();

        if($existe == null){
            $estadisticas = new Estadisticas();
            $estadisticas->primerIntentoBuenos = $aciertos;
            $estadisticas->primerIntentoFallos = $fallos;
            $estadisticas->penultimoIntentoBuenos = $aciertos;
            $estadisticas->penultimoIntentoFallos = $fallos;
            $estadisticas->ultimoIntentoBuenos = 0;
            $estadisticas->ultimoIntentoFallos = 0;
            $estadisticas->nNivel = $nNivel;
            $estadisticas->idUser = $idUser;
            $estadisticas->idPaciente = $idPaciente;
            dd("primer if");
            //$estadisticas->save();
        }else{
            if($existe->ultimoIntentoBuenos == 0){
                $existe->ultimoIntentoBuenos = $aciertos;
                $existe->ultimoIntentoFallos = $fallos;
                //dd("segundo if");
                $existe->save();
            }else{
                $existe->penultimoIntentoBuenos = $existe->ultimoIntentoBuenos;
                $existe->penultimoIntentoFallos = $existe->ultimoIntentoFallos;
                $existe->ultimoIntentoBuenos = $aciertos;
                $existe->ultimoIntentoFallos = $fallos;
                $existe->save();
            }
        }

        flash('Nivel 1 finalizado correctamente')->success()->important();
        return redirect('paciente');
    }

    public function estadisticas(Request $request, $id, $level){

        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }
        
        $userActual = \Auth::user();
        $idUser = $userActual->id;
        $aciertos   = $request->nAciertos;
        $fallos     = $request->nFallos;
        $nNivel     = $level;
        $idPaciente = $id;

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

        return view('paciente.estadisticas')
        ->with('id',$id)
        ->with('level',$level)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente)
        ->with('primerIntentoBuenos' , $primerIntentoBuenos)
        ->with('primerIntentoFallos' , $primerIntentoFallos)
        ->with('penultimoIntentoBuenos' , $penultimoIntentoBuenos)
        ->with('penultimoIntentoFallos' , $penultimoIntentoFallos)
        ->with('ultimoIntentoBuenos' , $ultimoIntentoBuenos)
        ->with('ultimoIntentoFallos' , $ultimoIntentoFallos);
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
