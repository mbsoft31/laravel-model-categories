<?php

namespace Mbsoft31\LaravelModelCategories\Tests\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mbsoft31\LaravelModelCategories\Tests\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
        ];
    }
}
