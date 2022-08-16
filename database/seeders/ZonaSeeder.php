<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zona;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $zona1 = new Zona();

       $zona1->nombre_z = "Capital Federal";
       $zona1->save();

       $zona2 = new Zona();

       $zona2->nombre_z = "Zona Sur";
       $zona2->save();

       $zona3 = new Zona();

       $zona3->nombre_z = "Zona Norte";
       $zona3->save();

       $zona4 = new Zona();

       $zona4->nombre_z = "Zona Oeste";
       $zona4->save();
    }
}
