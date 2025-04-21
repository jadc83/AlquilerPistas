<?php

namespace Database\Seeders;

use App\Models\Dia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nombres = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

        foreach ($nombres as $nombre) {
            Dia::create([
                'nombre' => $nombre,
            ]);
        }
    }
}
