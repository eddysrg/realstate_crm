<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'CDMX'],
            ['city' => 'Queretaro'],
            ['city' => 'Puebla'],
            ['city' => 'Toluca'],
            ['city' => 'Monterrey'],

        ]);
    }
}
