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
                'profit' => 0.8,
                'profit_type' => 1,
                'schedule' => 24,
                'status' => 1,
                'id_capital_back' => 1,
                ''
            ]
        )
    }
}