<?php

namespace Mbsoft31\LaravelModelCategories\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mbsoft31\LaravelModelCategories\Tests\database\factories\ProductFactory;
use Mbsoft31\LaravelModelCategories\Traits\HasCategories;

/**
 * @method static create(array $inputs)
 */
class Product extends Model
{
    use HasFactory;
    use HasCategories;

    protected $guarded = [];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
