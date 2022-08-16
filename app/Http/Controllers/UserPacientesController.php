<?php

namespace App\Http\Controllers;

use App\Models\User_Pacientes;

use App\Models\Genero;
use App\Models\Zona;

use Illuminate\Http\Request;

class UserPacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $pacientes = User_Pacientes::all();
        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genero_id = Genero::all()->pluck('nombre_g', 'id');
        $zonas = Zona::all()->pluck('nombre_z', 'id');
        $pacientes = User_pacientes::all()->pluck('num_caso', 'edad_p', 'genero', 'diagnostico', 'localidad', 'abordaje' , 'id');

        
        return view('pacientes.create', compact('genero_id', 'zonas', 'pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       User_pacientes::create($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_pacientes  $user_pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(User_pacientes $user_pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_pacientes  $user_pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(User_pacientes $user_pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_pacientes  $user_pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_pacientes $user_pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_pacientes  $user_pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_pacientes $user_pacientes)
    {
        //
    }
}
