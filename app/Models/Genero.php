<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User_pacientes;

class Genero extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_g'];

  
}
