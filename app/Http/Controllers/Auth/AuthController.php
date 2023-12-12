<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Email;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register(){
        return view("auth.register");
    }
    //validacion de register
    public function registerVerify(Request $request){
        $request->validate([
          
            'email'=> 'required|unique:users,email|email',
            'password'=> 'required|min:4',
            'password_confirmation'=> 'required|same:password'
        ],[
            //mensages error
            'email.required'=> 'el email es requerido',
            'email.unique' => 'el email ya ha sido usado',
        ]);
         //crearcion del usuario
        User::create([
           
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            
        ]);
         return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
        
    }
    public function login(){
        return view('auth.login');
    }
    
    public function loginVerify(request $request){
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required|min:4'
        ],[
            'email.required'=> 'el email es requerido',
            'email.unique' => 'el email ya ha sido usado',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['invalid_credentials'=> 'Usuario o cintraseñano valida'])->withInput();
        
    }
    public function signOnut(){
        Auth::logout();
        return redirect()->route('login')->with('success','session cerrada corectamente');
    }
}