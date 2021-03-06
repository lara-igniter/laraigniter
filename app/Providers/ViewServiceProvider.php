<?php

namespace App\Providers;

use Elegant\Contracts\Hook\PostControllerConstructor;
use Elegant\Support\Facades\Blade;

class ViewServiceProvider implements PostControllerConstructor
{
    public function postControllerConstructor(&$params)
    {
        Blade::directive('csrf', function () {
            return '<?php echo csrf_field(); ?>';
        });
    }
}
