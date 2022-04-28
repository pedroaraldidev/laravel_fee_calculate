<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fees')->insert([
            'origin_ddd' => '011',
            'destination_ddd' => '016',
            'value_min' => 1.90
        ]);
        DB::table('fees')->insert([
            'origin_ddd' => '011',
            'destination_ddd' => '017',
            'value_min' => 1.70
        ]);
        DB::table('fees')->insert([
            'origin_ddd' => '011',
            'destination_ddd' => '018',
            'value_min' => 0.90
        ]);
        DB::table('fees')->insert([
            'origin_ddd' => '016',
            'destination_ddd' => '011',
            'value_min' => 2.90
        ]);
        DB::table('fees')->insert([
            'origin_ddd' => '017',
            'destination_ddd' => '011',
            'value_min' => 2.70
        ]);
        DB::table('fees')->insert([
            'origin_ddd' => '018',
            'destination_ddd' => '011',
            'value_min' => 1.90
        ]);
    }
}
