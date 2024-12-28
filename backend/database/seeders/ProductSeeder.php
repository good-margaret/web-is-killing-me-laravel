<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Bouquet ' . $i,
                'price' => $faker->numberBetween(1500, 5000)
            ]);
        }
    }
}
