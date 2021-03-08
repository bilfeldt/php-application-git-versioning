<?php

namespace Bilfeldt\Version;

use DateTime;

class Version
{
    protected ?string $version;

    /**
     * A private constructor to disable instantiation.
     *
     * Version constructor.
     */
    public function __construct()
    {
        $date = trim(exec('git --git-dir ' . $this->gitBasePath() . ' log --pretty="%cI" -n1 HEAD')); // strict ISO 8601 format

        $hash = trim(exec('git --git-dir ' . $this->gitBasePath() . ' log --pretty="%h" -n1 HEAD'));

        $this->version = $date && $hash ? DateTime::createFromFormat(\DateTimeInterface::ISO8601, $date)->format('YmdHis')
            .'-'.$hash : null;
    }

    public function get(): ?string
    {
        return $this->version;
    }

    protected function gitBasePath(): string
    {
        // Laravel
        return base_path('.git');
    }
}
