<?php

namespace Mbsoft31\LaravelModelCategories\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mbsoft31\LaravelModelCategories\LaravelModelCategories
 */
class LaravelModelCategories extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mbsoft31\LaravelModelCategories\LaravelModelCategories::class;
    }
}
