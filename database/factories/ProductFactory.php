<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = product::class;

    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'description'=> fake()->sentence(7),
            'descriptionLong' => fake()->text,
            'price'=> fake()->randomfloat(2,7,100)
        ];
    }
}
