<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provincias;

class Localidades extends Model
{
    use HasFactory;
   

        public function provincias()
        {
            return $this->belongsTo(Provincias::class, 'id');
           
        }
    }
    

