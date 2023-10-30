<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesAccommodation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('types_accommodation')->insert([
            'type_id' => 1,
            'accommodation_id' =>   1,
        ]);
        DB::table('types_accommodation')->insert([
            'type_id' => 1,
            'accommodation_id' =>   2,
        ]);
        DB::table('types_accommodation')->insert([
            'type_id' => 2,
            'accommodation_id' =>   3,
        ]);
        DB::table('types_accommodation')->insert([
            'type_id' => 2,
            'accommodation_id' =>   4,
        ]);
        DB::table('types_accommodation')->insert([
            'type_id' => 3,
            'accommodation_id' =>   1,
        ]);
        DB::table('types_accommodation')->insert([
            'type_id' => 3,
            'accommodation_id' =>   2,
        ]);
        DB::table('types_accommodation')->insert([
            'type_id' => 3,
            'accommodation_id' =>   3,
        ]);
    }
}
