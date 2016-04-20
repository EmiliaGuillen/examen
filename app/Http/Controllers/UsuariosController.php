<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UsuariosController extends Controller
{
    public function index()
    {
    	return 'index';
    }

    public function store(Request $req){ //query builder
            DB::table('usuarios')->insert([
            'nombre' => $req->input('nombre'),
            'email' => $req->input('email'),
            'password'   => $req->input('password'),
            
        ]);    
  

    	
        return view('website.index2');
    }
}
