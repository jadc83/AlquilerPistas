<?php

namespace Database\Seeders;

use App\Models\Dia;
use App\Models\Tramo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiaTramoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dias = Dia::all();
        $tramos = Tramo::all()->pluck('id'); // obtenemos solo los IDs

        foreach ($dias as $dia) {
            $dia->tramos()->attach($tramos);
        }
    }
}
