<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Models\User_postulados_relacions;
use App\Models\User;
use App\Models\User_Pacientes;
use App\Models\Experiencia;

class User_postulados_relacionsController extends Controller
{
    public function index()
    {
       
        $relation = User_postulados_relacions::paginate(5);
        return view('postulados.index', compact('relation'));  
    }

    public function show($id)
    { 
        $expe = Experiencia::find($id);

        return view('postulados.show', compact('expe'), [
             'postulado' => User_postulados_relacions::findOrFail($id)
    ],
    [
             'user' => User::findOrFail($id)
    ]);
    }

    public function create(){

        return view('postulados.create');
    }
   

}
