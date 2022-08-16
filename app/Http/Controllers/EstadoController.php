<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estado;

class EstadoController extends Controller
{
    public function index(){
      

        $estado = Estado::paginate(5);
        return view('estado.index', compact('estado'));
    }
}
