<?php

namespace Database\Seeders;

use App\Models\ImageProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageProduct::factory(40)->create();
    }
}
