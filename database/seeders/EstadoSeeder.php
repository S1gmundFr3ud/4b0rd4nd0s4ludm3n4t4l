<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = new Estado();

        $estado->nombre_e = "Disponible";
        $estado->save();

        $estado2 = new Estado();

        $estado2->nombre_e = "No disponible";
        $estado2->save();

       
    }
}
