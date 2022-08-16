<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Estado;
use App\Models\Zona;

class User_postulados_relacions extends Model
{
    use HasFactory;

    protected $fillable =['edad','profile_image', 'user_id', 'generos_id', 'zonas_id', 'localidades_id', 'barrio', 'telefono', 'email_laboral', 'estados_id', 'sobre_mi', 'carrera', 'certificado' , 'id'];
    
    public function user(){
        
        return $this->belongsTo(User::class, 'id');
        }

    public function estado(){

        return $this->belongsTo(Estado::class, 'estados_id');
        }
    
    public function zona(){

        return $this->belongsTo(Zona::class, 'zonas_id');
        } 
    
        public function experiencia()
        {
           
        return $this->belongsTo(Experiencia::class, 'user_id');
        
            
        }

        public function user_experiencia()
        {
           
        return $this->belongsTo(User_experiencias::class, 'user_id');
        
            
        }
        public function user_postulados_relacions()
        {
           
        return $this->belongsTo(user::class, 'id');
        
            
        }
        
      

       

}
