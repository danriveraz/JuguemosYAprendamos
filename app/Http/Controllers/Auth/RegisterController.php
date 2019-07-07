<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Session\TokenMismatchException;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function verificarUser(Request $request){
        $user = $request->user;
        if($request->ajax()){

            $usersize = 1;

            if(strlen($user) > 5){
                $usersize = User::UserSearch($user)->get();
                return response()->json([
                    "mensaje" => sizeof($usersize)
                ]);
            }else{
                return response()->json([
                    "mensaje" => $usersize
                ]);
            }
        }
    }

    public function verificarEmail(Request $request){
        $regemail = $request->regemail;
        if($request->ajax()){

            $emailsize = 1;

            if(strlen($regemail) > 7){
                $emailsize = User::EmailSearch($regemail)->get();
                return response()->json([
                    "mensaje" => sizeof($emailsize)
                ]);
            }else{
                return response()->json([
                    "mensaje" => $emailsize
                ]);
            }
        }
    }

    public function postRegister(Request $request){

        $email = $request->regEmail;
        $username = $request->regUsuario;

        $userEmail = User::EmailSearch($email)->get();
        $userUser = User::UserSearch($username)->get();
        
        if(sizeOf($userEmail) == 0 && sizeOf($userUser) == 0){


            $user = new User();
            $user->email = $email;
            $user->password = bcrypt($request->regPassword);
            $user->usuario = $request->regUsuario;
            $user->tipoUsuario = $request->selectTipoUsuario;

            if($request->regCode == null){
                 $user->passTipoUsuario = 0;
            }else{
                $user->passTipoUsuario = $request->regCode;
            }

            $user->token = "esto se debe eliminar";
            $user->nombreCompleto = "Terapeuta";
            $user->pacienteActual = 0;
            $user->remember_token = str_random(100);
            $user->save();

            flash("Su cuenta fue creada correctamente, inicie sesión.")->success()->important();
            return redirect('/');

        }else{
            if(sizeof($userUser) > 0){
                flash('Nombre de usuario en uso')->error()->important();
                return redirect('/');
            }else if(sizeof($userEmail) > 0){
                flash('Correo en uso')->error()->important();
                return redirect('/');
            }
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
