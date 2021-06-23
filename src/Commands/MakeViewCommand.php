<?php

namespace RyanChandler\LaravelMakeView\Commands;

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
            'views' . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $this->argument('path')) . '.blade.php'
        );

        $dir = dirname($path);

        (new Filesystem)->ensureDirectoryExists($dir);

        $view = $this->getStub('view');
        $view = str_replace('{{ inspire }}', Inspiring::quote(), $view);

        (new Filesystem)->put($path, $view);

        $this->comment('View created successfully.');
    }

    protected function getStub($name)
    {
        if (file_exists($path = base_path('stubs/'.$name.'.stub'))) {
            return file_get_contents($path);
        }

        return __DIR__.'/stubs/'.$name.'.stub';
    }
}
