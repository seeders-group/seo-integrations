<?php

namespace Seeders\SeoIntegrations;

use Seeders\SeoIntegrations\Commands\SeoIntegrationsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SeoIntegrationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('seo-integrations')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_seo-integrations_table')
            ->hasCommand(SeoIntegrationsCommand::class);
    }
}
