<?php

use Elegant\Routing\Contracts\MiddlewareInterface;

class RouteAjaxMiddleware implements MiddlewareInterface
{

    /**
     * Middleware entry point
     *
     * @return void
     */
    public function run($args = [])
    {
        if(!app()->input->is_ajax_request()) {
            trigger_404();
        }
    }
}
