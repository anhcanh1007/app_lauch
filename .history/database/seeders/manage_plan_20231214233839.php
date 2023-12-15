<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class manage_plan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manage_plans')->insert(
            [
                'name' => 'EURUSD',
                'badge' => 'EURUSD Plan',
                'minimum_amount' => 50,
                'maximum_amount' => 4999,
                'fixed_amount' => 0,
                ''
            ]
        )
    }
}