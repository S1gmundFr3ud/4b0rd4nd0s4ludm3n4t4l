<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Localidades;

class Provincias extends Model
{
    use HasFactory;

    public function localidades()
    {
            return $this->hasMany(Localidades::class, 'provincias_id');
        }
   
    

}

