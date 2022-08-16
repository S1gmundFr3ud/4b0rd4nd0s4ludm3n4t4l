<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      
        $genero = new Genero();

        $genero->nombre_g = "Indistinto";
        $genero->save();

        $genero1 = new Genero();

        $genero1->nombre_g = "Femenino";
        $genero1->save();

        $genero2 = new Genero();

        $genero2->nombre_g = "Varon";
        $genero2->save();


    }
}
