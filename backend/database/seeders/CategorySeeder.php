<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'roses']);
        Category::create(['name' => 'lilies']);
        Category::create(['name' => 'chrysanthemums']);
    }
}
