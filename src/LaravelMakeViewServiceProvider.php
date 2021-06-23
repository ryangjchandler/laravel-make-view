<?php

namespace RyanChandler\LaravelMakeView;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RyanChandler\LaravelMakeView\Commands\MakeViewCommand;

class LaravelMakeViewServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-make-view')
            ->hasCommand(MakeViewCommand::class);
    }
}
