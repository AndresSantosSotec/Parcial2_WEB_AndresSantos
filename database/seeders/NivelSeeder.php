<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Agrega esta línea para importar DB

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveles = ['PRIMERO', 'SEGUNDO', 'TERCERO', 'CUARTO', 'QUINTO', 'SEXTO']; // Corrección en el nombre de CUARTO
        foreach ($niveles as $nivel) {
            DB::table('niveles')->insert([
                'nombre' => $nivel,
            ]);
        }
    }
}
