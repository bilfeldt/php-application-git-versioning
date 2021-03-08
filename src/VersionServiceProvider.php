<?php

namespace Bilfeldt\Version;

use Illuminate\Support\ServiceProvider;

class VersionServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the Version singleton within the service container
        $this->app->singleton(Version::class, function ($app) {
            return new Version();
        });

        // Register the facade accessor
        $this->app->alias(Version::class, 'version');
    }
}
