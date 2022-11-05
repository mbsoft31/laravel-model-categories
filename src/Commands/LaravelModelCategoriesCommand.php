<?php

namespace Mbsoft31\LaravelModelCategories\Commands;

use Illuminate\Console\Command;

class LaravelModelCategoriesCommand extends Command
{
    public $signature = 'laravel-model-categories';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
