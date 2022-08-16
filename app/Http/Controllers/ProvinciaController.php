<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provincia;


class ProvinciaController extends Controller
{
    public function index(){
      

        $provincia = Provincia::find('nombre_p');
        return view('provincias.index', compact('provincia'));
    }
}
