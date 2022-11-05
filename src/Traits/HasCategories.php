<?php

namespace Mbsoft31\LaravelModelCategories\Traits;

use Mbsoft31\LaravelModelCategories\Models\Category;

trait HasCategories
{
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorised', 'category_model');
    }
}
