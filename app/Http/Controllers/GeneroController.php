<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genero;

class GeneroController extends Controller
{
    public function index(){
      

        $genero = Genero::paginate(5);
        return view('genero.index', compact('genero'));
    }
}
