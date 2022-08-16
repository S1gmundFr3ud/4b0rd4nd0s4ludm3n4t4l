<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulados;
use App\Models\User;

class PostuladosController extends Controller
{
    public function index()
    {

        $user = User->with('user_postulados_relacions');
        add( $user );

      
   
    }




}
