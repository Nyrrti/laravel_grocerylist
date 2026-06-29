<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Milk',
                'Bread',
                'Eggs',
                'Chicken Breast',
                'Rice',
                'Bananas',
            ]),
            'description' => fake()->randomElement([
                'Fresh and locally sourced',
                'Daily essential item',
                'High quality grocery product',
            ]),
        ];
    }
}
