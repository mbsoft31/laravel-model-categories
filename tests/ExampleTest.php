<?php

use Mbsoft31\LaravelModelCategories\Tests\Models\Product;

it('can test', function () {
    $product = Product::factory()->create();
    $categoryData = [
        'name' => 'color',
        'slug' => 'color',
    ];

    $product->categories()->create($categoryData);

    dd($product->toArray(), $product->categories->toArray());

    expect(true)->toBeTrue();
});
