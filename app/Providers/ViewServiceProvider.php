<?php

namespace App\Providers;

use Elegant\Foundation\Hooks\Contracts\PostControllerConstructorHookInterface;
use Elegant\Support\Facades\Blade;

class ViewServiceProvider implements PostControllerConstructorHookInterface
{
    public function postControllerConstructorHook(&$params)
    {
        Blade::directive('csrf', function () {
            return '<?php echo csrf_field(); ?>';
        });
    }
}
