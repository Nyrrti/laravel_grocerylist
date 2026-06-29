<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Category;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id', 'name');

        Item::create([
            'name' => 'Chicken Breast',
            'description' => 'Boneless chicken',
            'category_id' => $categories['Meat'],
        ]);
        Item::create([
            'name' => 'Ground Beef',
            'description' => '500g lean ground beef',
            'category_id' => $categories['Meat'],
        ]);
        Item::create([
            'name' => 'Pork Chops',
            'description' => 'Fresh pork chops (2 pieces)',
            'category_id' => $categories['Meat'],
        ]);
        Item::create([
            'name' => 'Cheddar Cheese',
            'description' => 'Aged cheddar block 200g',
            'category_id' => $categories['Dairy'],
        ]);

        Item::create([
            'name' => 'Greek Yogurt',
            'description' => 'Plain Greek yogurt 500g',
            'category_id' => $categories['Dairy'],
        ]);
    }
}
