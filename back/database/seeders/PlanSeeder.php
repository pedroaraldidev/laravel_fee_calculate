<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'FaleMais30',
            'minutes' => 30,
        ]);
        DB::table('plans')->insert([
            'name' => 'FaleMais60',
            'minutes' => 60,
        ]);
        DB::table('plans')->insert([
            'name' => 'FaleMais120',
            'minutes' => 120,
        ]);
    }
}
