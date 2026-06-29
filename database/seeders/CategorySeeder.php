<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Meat'],
            ['name' => 'Dairy'],
            ['name' => 'Produce'],
            ['name' => 'Pantry'],
            ['name' => 'Frozen'],
            ['name' => 'Beverages'],
        ]);
    }
}
