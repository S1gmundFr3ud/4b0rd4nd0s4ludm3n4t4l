<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experiencia;

class ExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiencia = new Experiencia();

        $experiencia->nombre = "Psicosis";
        $experiencia->save();

        $experiencia2 = new Experiencia();

        $experiencia2->nombre = "TEA";
        $experiencia2->save();

        $experiencia3 = new Experiencia();

        $experiencia3->nombre = "Autismo";
        $experiencia3->save();

        $experiencia4 = new Experiencia();

        $experiencia4->nombre = "Paranoia";
        $experiencia4->save();

        $experiencia5 = new Experiencia();

        $experiencia5->nombre = "Equizofrenia";
        $experiencia5->save();
    }
}
