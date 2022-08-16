<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_experiencias extends Model
{
    use HasFactory;

    public function user_postulado()
    {
       
    return $this->belongsTo(User_postulados_relacions::class, 'user_id');
    
        
    }
}
