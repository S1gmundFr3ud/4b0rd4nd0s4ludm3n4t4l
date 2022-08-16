<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;
use App\Models\User_postulados_relacions;
use App\Models\UserPacientes;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->username;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
    public function experiencia()
    {
       
        return $this->belongsToMany(Experiencia::class, 'user_experiencia');
    
        
    }
    public function postulado()
        {
           
            return $this->belongsToMany(Postulado::class, 'user_postulado');
        }


        

        public function user_postulados()
        {
           
            return $this->HasMany(User_postulados_relacions::class, 'user_id');
        }
        public function user_paciente()
        {
           
            return $this->HasMany(User_pacientes::class, 'user_id');
        }
        public function users()
        {
            return $this->HasMany(User_postulados_relacions::class, 'user_id');
        }
    
}