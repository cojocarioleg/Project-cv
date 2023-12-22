<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            TypeSeeder::class,
            SizeSeeder::class,
            OfferSeeder::class,
            ColorSeeder::class,
            ProductSeeder::class,
            ImageProductSeeder::class,
            NetworkSeeder::class,
            AdvantageSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            CurrencySeeder::class,
        ]);
    }
}
