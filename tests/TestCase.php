<?php

namespace Bilfeldt\Version\Tests;

use Bilfeldt\Version\VersionServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            VersionServiceProvider::class,
        ];
    }
}
