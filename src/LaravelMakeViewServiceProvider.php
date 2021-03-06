<?php

namespace RyanChandler\LaravelMakeView;

use RyanChandler\LaravelMakeView\Commands\MakeViewCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMakeViewServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-make-view')
            ->hasCommand(MakeViewCommand::class);
    }
}
