<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Http\Requests;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	//return $request->all();


        //dd para para el flujo del rograma antes del if me tiene que hacer algo
        //dd($request->all());
    	//if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            //return "Usuario logueado";
            

            if(Auth::check()){
                //return Auth::user()->tipo;// datos del suario

                //$tipo_usuario= Auth::user()->tipo;
                //Filtros de usuario del sistema

                //if($tipo_usuario==1){
                if($Auth::user()->tipo==1){
                    //dd("Es administrador");
                    //return"Administrador";
                    return redirect('/administrador');
                }

                //return"Cliente";
                return  redirect('/');
            }
            //return redirect()->intended('dashboard');
            //return redirect('/acceder');
             return view('website.acceder');

       // }
       //dd("No logeado");
      //  return redirect('/acceder'); 
       // return back()->with('error',true);//primer valor el nombre con el que se llama a mandar la vista, valor de la variable::: WITH permite crear variables de tipo flash

    }

    public function store(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // creo una variable de sesion del usuario
            $usuario = Auth::user();
            // verifica que sea administrador
            return "Cliente";
        }
         return view('administrador/panel');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}





