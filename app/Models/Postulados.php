<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Postulados extends Model
{
    public $timestamps=false;
    
    use HasFactory;

    public function users(){

    return $this->belongsToMany(users::class, 'user_postulados_relacions');
    }
 
}
