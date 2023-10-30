<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Accommodations extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Insertar registros en la tabla
        DB::table('accommodation')->insert([
            'name' => 'SENCILLA',
            'created_at' => '2023-10-28 15:45:08.000',
            'updated_at' => '2023-10-28 15:45:08.000',
            // Más campos y valores
        ]);
        DB::table('accommodation')->insert([
            'name' => 'DOBLE',
            'created_at' => '2023-10-28 15:45:08.000',
            'updated_at' => '2023-10-28 15:45:08.000',
            // Más campos y valores
        ]);
        DB::table('accommodation')->insert([
            'name' => 'TRIPLE',
            'created_at' => '2023-10-28 15:45:08.000',
            'updated_at' => '2023-10-28 15:45:08.000',
            // Más campos y valores
        ]);
        DB::table('accommodation')->insert([
            'name' => 'CUADRUPLE',
            'created_at' => '2023-10-28 15:45:08.000',
            'updated_at' => '2023-10-28 15:45:08.000',
            // Más campos y valores
        ]);
    }
}
