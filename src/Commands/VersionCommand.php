<?php

namespace Bilfeldt\Version\Commands;

use Illuminate\Console\Command;

class VersionCommand extends Command
{
    public $signature = 'php-application-git-versioning';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
