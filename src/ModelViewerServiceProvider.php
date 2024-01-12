<?php

namespace Furqat\ModelViewer;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModelViewerServiceProvider extends PackageServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('model-viewer')
            ->hasViews()
            ->hasRoutes();
    }
}
