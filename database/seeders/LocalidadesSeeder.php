<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Localidades;


class LocalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localidad = new Localidades();

        $localidad->nombre_l = "Ciudad Autonoma de Buenos Aires";
        $localidad->save();
    
    
    }
}
