<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;

class ZonaController extends Controller
{
    public function index(){
      

        $zona = Zona::paginate(5);
        return view('zona.index', compact('zona'));
    }
}
