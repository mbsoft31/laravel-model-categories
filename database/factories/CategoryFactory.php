<?php

namespace Mbsoft31\LaravelModelCategories\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Mbsoft31\LaravelModelCategories\Models\Category;


class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $name = $this->faker->title;
        $slug = Str::slug($name);
        return [
            "name"      => $name,
            "slug"      => $slug,
            "parent_id" => null,
        ];
    }
}

