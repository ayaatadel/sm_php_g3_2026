<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->unique()->name(),
            'description'=>fake()->paragraph(),
            'price'=>fake()->randomFloat(6,1,100),
            'quantity'=>fake()->numberBetween(1,40),
            'created_at'=>now(),
            'updated_at'=>now(),
            'category_id'=>Category::inRandomOrder()->first()->id
        ];
    }
}
