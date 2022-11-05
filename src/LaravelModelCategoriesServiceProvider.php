<?php

namespace Mbsoft31\LaravelModelCategories;

use Mbsoft31\LaravelModelCategories\Commands\LaravelModelCategoriesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelModelCategoriesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-categories')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-model-categories_table')
            ->hasCommand(LaravelModelCategoriesCommand::class);
    }
}
