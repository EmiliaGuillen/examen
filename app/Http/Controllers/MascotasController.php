<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class MascotasController extends Controller
{
    
   public function index()
    {
        return 'index';
    }

          public function store(Request $request)
    {
        $mensaje = Mensaje::create($request->all());
        return "ok funciono";
    }


}
