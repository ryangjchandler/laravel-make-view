<?php

namespace RyanChandler\LaravelMakeView\Commands;

use Faker\Core\File;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Inspiring;

class MakeViewCommand extends Command
{
    public $signature = 'make:view {path}';

    public $description = 'Make a new Blade view.';

    public function handle()
    {
        $path = resource_path(
            'views' . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $this->argument('path'))
        );

        $dir = dirname($path);

        (new Filesystem)->ensureDirectoryExists($dir);

        $view = file_get_contents(__DIR__.'/stubs/view.stub');
        $view = str_replace('{{ inspire }}', Inspiring::quote(), $view);

        (new Filesystem)->put($path, $view);

        $this->comment('View created successfully.');
    }
}
