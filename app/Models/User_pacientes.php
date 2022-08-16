<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Genero;
use App\Models\Zona;


class User_pacientes extends Model
{
    use HasFactory;
    

    protected $fillable =['usuario_id','num_caso', 'edad_p', 'genero','genero_id', 'zonas_id', 'diagnostico', 'telefono_caso', 'email_caso',  'localidad', 'abordaje' , 'id'];


    public function user(){
        
        return $this->belongsTo(User::class, 'usuario_id');
        }

     public function zona(){

            return $this->belongsTo(Zona::class, 'zonas_id');
            } 

            public function generos(){

                return $this->belongsTo(Genero::class, 'genero_id');
                } 
           
           

               
}
