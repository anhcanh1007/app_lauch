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
                'is_lifetime' => 1,
                'repeatable' => 0,
                'featured' => 1,
            ],
            [
                'name' => 'GBPUSD',
                'badge' => 'GBPUSD Plan',
                'minimum_amount' => 50,
                'maximum_amount' => 50000,
                'fixed_amount' => 0,
                'profit' => 1.0,
                'profit_type' => 1,
                'schedule' => 24,
                'status' => 1,
                'id_capital_back' => 1,
                'is_lifetime' => 0,
                'repeatable' => 30,
                'featured' => 1,
            ],
            [
                'name' => 'JPYUSD',
                'badge' => 'JPYUSD Plan',
                'minimum_amount' => 5000,
                'maximum_amount' => 100000,
                'fixed_amount' => 0,
                'profit' => 1.2,
                'profit_type' => 1,
                'schedule' => 24,
                'status' => 1,
                'id_capital_back' => 1,
                'is_lifetime' => 1,
                'repeatable' => 0,
                'featured' => 1,
            ],
            [
                'name' => 'ETHUSDT',
                'badge' => 'ETHUSDT Plan',
                'minimum_amount' => 50,
                'maximum_amount' => 4999,
                'fixed_amount' => 0,
                'profit' => 2.0,
                'profit_type' => 1,
                'schedule' => 24,
                'status' => 1,
                'id_capital_back' => 1,
                'is_lifetime' => 0,
                'repeatable' => 45,
                'featured' => 1,
            ],
            [
                'name' => 'GOLDUSD',
                'badge' => 'GOLDUSD Plan',
                'minimum_amount' => 50,
                'maximum_amount' => 100000,
                'fixed_amount' => 0,
                'profit' => 0.8,
                'profit_type' => 1,
                'schedule' => 24,
                'status' => 1,
                'id_capital_back' => 1,
                'is_lifetime' => 0,
                'repeatable' => 35,
                'featured' => 1,
            ],
            [
                'name' => 'BTCUSDT',
                'badge' => 'BTCUSDT Plan',
                'minimum_amount' => 1000,
                'maximum_amount' => 4999,
                'fixed_amount' => 0,
                'profit' => 0.8,
                'profit_type' => 1,
                'schedule' => 24,
                'status' => 1,
                'id_capital_back' => 1,
                'is_lifetime' => 0,
                'repeatable' => 60,
                'featured' => 1,
            ],
        );
    }
}