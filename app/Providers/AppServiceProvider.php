<?php

namespace App\Providers;

use Elegant\Foundation\Autoloader;
use Elegant\Contracts\Hook\PreSystem;

class AppServiceProvider implements PreSystem
{
    public function preSystem()
    {
        (new Autoloader())::register();
    }
}
