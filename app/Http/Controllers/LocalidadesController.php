<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Localidades;
use App\Models\Provincias;


class LocalidadesController extends Controller
{
    public function index(){
       
      
       
        $localidades = Localidades::all();
        
        return view('localidades.index', compact( 'localidades'));
    }
}
