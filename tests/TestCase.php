<?php

namespace Mbsoft31\LaravelModelCategories\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mbsoft31\LaravelModelCategories\LaravelModelCategoriesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mbsoft31\\LaravelModelCategories\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelModelCategoriesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-model-categories_table.php.stub';
        $migration->up();
        */
    }
}
