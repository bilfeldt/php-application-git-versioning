<?php

namespace Bilfeldt\Version;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bilfeldt\Version\Version
 */
class VersionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'php-application-git-versioning';
    }
}
