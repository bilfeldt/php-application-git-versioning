<?php

namespace Bilfeldt\Version;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bilfeldt\Version\Commands\VersionCommand;

class VersionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('php-application-git-versioning')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_php_application_git_versioning_table')
            ->hasCommand(VersionCommand::class);
    }
}
