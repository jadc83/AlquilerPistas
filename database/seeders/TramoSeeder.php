<?php

namespace Database\Seeders;

use App\Models\Tramo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TramoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($hora = 10; $hora < 20; $hora++) {

            $horario = str_pad($hora, 2, '0', STR_PAD_LEFT) . ':00:00';
            Tramo::factory()->create([
                'horario' => $horario,
            ]);
        }
    }
}
