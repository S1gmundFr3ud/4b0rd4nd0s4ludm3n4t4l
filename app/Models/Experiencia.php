<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\experiencia;
use App\Models\User;

class experiencia extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function users(){
       
        return $this->belongsToMany(users::class, 'user_experiencia');
    }
}
