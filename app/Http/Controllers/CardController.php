<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Genero;
use App\Models\Zona;
use App\Models\Experiencia;
use App\Models\User_postulados_relacions;
use App\Models\Localidades;
use App\Models\Provincias;
use App\Models\Estado;



class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $card = User_postulados_relacions::paginate(6);
        return view('card.index', compact('card')); 
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $estados = Estado::all()->pluck('nombre_e', 'id');
        $provincias = Provincias::all()->pluck('nombre_p', 'id');
        $localidad = Localidades::all()->pluck('nombre_l', 'id');
        $genero_id = Genero::all()->pluck('nombre_g', 'id');
        $zonas = Zona::all()->pluck('nombre_z', 'id');
        $expe = Experiencia::all()->pluck('nombre', 'id');
        $postulados = User_postulados_relacions::all()->pluck('edad', 'user_id', 'generos_id', 'zonas_id', 'localidades_id', 'barrio', 'telefono','profile_image', 'email_laboral', 'estados_id', 'sobre_mi', 'carrera', 'certificado' , 'id');

        
        return view('card.create', compact('genero_id', 'zonas', 'localidad', 'provincias', 'estados', 'postulados','expe'));




         


       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User_postulados_relacions::create($request->all());
        return redirect()->route('card.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       return view('card.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User_postulados_relacions $card)
    {
        $estados = Estado::all()->pluck('nombre_e', 'id');
        $provincias = Provincias::all()->pluck('nombre_p', 'id');
        $localidad = Localidades::all()->pluck('nombre_l', 'id');
        $genero_id = Genero::all()->pluck('nombre_g', 'id');
        $zonas = Zona::all()->pluck('nombre_z', 'id');

        $postulados = User_postulados_relacions::all()->pluck('edad', 'user_id', 'generos_id', 'zonas_id', 'localidades_id', 'barrio', 'telefono','profile_image', 'email_laboral', 'estados_id', 'sobre_mi', 'carrera', 'certificado' , 'id');

        
        return view('card.edit', compact('genero_id', 'zonas', 'localidad', 'provincias', 'estados', 'postulados'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
