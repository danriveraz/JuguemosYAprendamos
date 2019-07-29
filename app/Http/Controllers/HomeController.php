<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userAcutal = \Auth::user();
        dd($userAcutal->passTipoUsuario == 0);
        if($userAcutal->tipoUsuario == "Terapia en casa"){
            return view('paciente.postura')
            ->with('id',0)
            ->with('level',1)
            ->with('nombrePaciente' , "")
            ->with('idPaciente' , 0);
        }else{
            return view('paciente');
        }
    }
}
