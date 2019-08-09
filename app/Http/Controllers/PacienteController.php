<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Paciente;
use App\Estadisticas;
use App\User;
use App\UserPaciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userActual = \Auth::user();

        if($userActual->passTipoUsuario != 0){

            $userPaciente = UserPaciente::SearchPacientes($userActual->id)->get();
            $pacientes = [];

            foreach ($userPaciente as $paciente) {
                $idAux = $paciente->idPaciente;
                $pacienteAux = Paciente::find($idAux);
                $pacientes[] = $pacienteAux;
            }
            //$pacientes = Paciente::orderBy('nombrePaciente','ASC')->get();
            $userPA = $userActual->pacienteActual;
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
        }else{
            $nombrePaciente = "";
            $idPaciente = 0;
            
            return view('paciente.postura')
            ->with('id',0)
            ->with('level',1)
            ->with('nombrePaciente' , "")
            ->with('idPaciente' , 1);
        }
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

        $userPaciente = new UserPaciente();
        $userPaciente->idPaciente = $paciente->id;
        $userPaciente->idUser = \Auth::user()->id;
        $userPaciente->save();

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
        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }

        return view('paciente.postura')
        ->with('id',$id)
        ->with('level',$level)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente);
    }

    public function cara($id, $level)
    {
        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }
        return view('paciente.cara')
        ->with('id',$id)
        ->with('level',$level)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente);
    }

    public function sonido($id, $level)
    {
        $userPA = \Auth::user()->pacienteActual;
        $paciente = Paciente::Search($userPA)->get()->first();
        $nombrePaciente = "";
        $idPaciente = 0;
        if($paciente != null){
            $nombrePaciente = $paciente->nombrePaciente;
            $idPaciente = $paciente->id;
        }

        $sonido = "";

        if($level == 1){
            $sonido = "../../../img/slide/sonidoP.png";
        }elseif($level == 2){
            $sonido = "../../../img/slide/sonidoM.png";
        }else {
            $sonido = "../../../img/slide/sonidoB.png";
        }

        return view('paciente.sonido')
        ->with('id',$id)
        ->with('level',$level)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente)
        ->with('sonido' , $sonido);
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

        $palabras = [];

        if($level == 1) {
            $palabras = [
                ["palabra" => "Papá", "ruta" => "../../../img/Palabras/papa.png", "audio" => "../../../audio/papa.ogg"],
                ["palabra" => "Pato", "ruta" => "../../../img/Palabras/pato.png", "audio" => "../../../audio/pato.ogg"],
                ["palabra" => "Mapa", "ruta" => "../../../img/Palabras/mapa.png", "audio" => "../../../audio/mapa.ogg"],
                ["palabra" => "Copa", "ruta" => "../../../img/Palabras/copa.png", "audio" => "../../../audio/copa.ogg"],
                ["palabra" => "Pelota", "ruta" => "../../../img/Palabras/pelota.png", "audio" => "../../../audio/pelota.ogg"],
                ["palabra" => "Campo", "ruta" => "../../../img/Palabras/campo.png", "audio" => "../../../audio/campo.ogg"]
            ];
        }else if($level == 2){
            $palabras = [
                ["palabra" => "Cama", "ruta" => "../../../img/Palabras/cama.png", "audio" => "../../../audio/cama.ogg"],
                ["palabra" => "Mamá", "ruta" => "../../../img/Palabras/mama.png", "audio" => "../../../audio/mama.ogg"],
                ["palabra" => "Manzana", "ruta" => "../../../img/Palabras/manzana.png", "audio" => "../../../audio/manzana.ogg"],
                ["palabra" => "Mariposa", "ruta" => "../../../img/Palabras/mariposa.png", "audio" => "../../../audio/mariposa.ogg"],
                ["palabra" => "Mesa", "ruta" => "../../../img/Palabras/mesa.png", "audio" => "../../../audio/mesa.ogg"],
                ["palabra" => "Moto", "ruta" => "../../../img/Palabras/moto.png", "audio" => "../../../audio/moto.ogg"]
            ];
        }else {
            $palabras = [
                ["palabra" => "Bailar", "ruta" => "../../../img/Palabras/bailar.png", "audio" => "../../../audio/bailar.ogg"],
                ["palabra" => "Ballena", "ruta" => "../../../img/Palabras/ballena.png", "audio" => "../../../audio/ballena.ogg"],
                ["palabra" => "Barco", "ruta" => "../../../img/Palabras/barco.png", "audio" => "../../../audio/barco.ogg"],
                ["palabra" => "Bebé", "ruta" => "../../../img/Palabras/bebe.png", "audio" => "../../../audio/bebe.ogg"],
                ["palabra" => "Bicicleta", "ruta" => "../../../img/Palabras/bicicleta.png", "audio" => "../../../audio/bicicleta.ogg"],
                ["palabra" => "Burro", "ruta" => "../../../img/Palabras/burro.png", "audio" => "../../../audio/burro.ogg"]
            ];
        }



        return view('paciente.palabra')
        ->with('id',$id)
        ->with('level',$level)
        ->with('nombrePaciente' , $nombrePaciente)
        ->with('idPaciente' , $idPaciente)
        ->with('palabras' , $palabras);
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
            $estadisticas->save();
        }else{
            if($existe->ultimoIntentoBuenos == 0){
                $existe->ultimoIntentoBuenos = $aciertos;
                $existe->ultimoIntentoFallos = $fallos;
                $existe->save();
            }else{
                $existe->penultimoIntentoBuenos = $existe->ultimoIntentoBuenos;
                $existe->penultimoIntentoFallos = $existe->ultimoIntentoFallos;
                $existe->ultimoIntentoBuenos = $aciertos;
                $existe->ultimoIntentoFallos = $fallos;
                $existe->save();
            }
        }

        flash('Nivel finalizado correctamente')->success()->important();
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
        $userActual = \Auth::user();
        if ($userActual->pacienteActual == $id) {
            $userActual->pacienteActual = 0;
            $userActual->save();
            flash('Se estaba trabajando con el paciente. Hemos quitado la selección del paciente, por favor <b>intente eliminarlo de nuevo.<b>')->error()->important();
            return redirect('paciente');
        }else{

            $userPaciente = UserPaciente::SearchPaciente($id);
            $userPaciente->delete();

            $paciente = Paciente::find($id);
            $paciente->delete();

            flash('Paciente eliminado correctamente')->success()->important();
            return redirect('paciente');
        }
    }
}
