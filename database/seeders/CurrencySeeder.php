<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('currencies')->insert([
            [
                'code'=>'MDL',
                'symbol' => 'LEI',
                'is_main' => 1,
                'rate' => 1,

            ],
            [
                'code'=>'USD',
                'symbol' => '$',
                'is_main' => 0,
                'rate' => 18.00,

            ],
            [
                'code'=>'EUR',
                'symbol' => '€',
                'is_main' => 0,
                'rate' => 20.10,
            ],
        ]);
    }
}
