<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'ddd' => '011',
            'region' => 'SP'
        ]);
        DB::table('codes')->insert([
            'ddd' => '016',
            'region' => 'SP'
        ]);
        DB::table('codes')->insert([
            'ddd' => '017',
            'region' => 'SP'
        ]);
        DB::table('codes')->insert([
            'ddd' => '018',
            'region' => 'SP'
        ]);
    }
    }

