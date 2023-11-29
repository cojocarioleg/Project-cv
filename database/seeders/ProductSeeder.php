<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Size;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory(10)->create();
        $colors = Color::all();
        $sizes = Size::all();
        $offers = Offer::all();
        $types = Type::all();

        foreach($products as $product){
            $colorsIds = $colors->random(2)->pluck('id');
            $sizesIds = $sizes->random(2)->pluck('id');
            $offersIds = $offers->random(2)->pluck('id');
            $typesIds = $types->random(1)->pluck('id');

            $product->colors()->attach($colorsIds);
            $product->sizes()->attach($sizesIds);
            $product->offers()->attach($offersIds);
            $product->types()->attach($typesIds);
        }
    }
}
