<?php
defined('BASEPATH') or exit('No direct script access allowed');

use DebugBar\DebugBar;
use DebugBar\OpenHandler;
use DebugBar\Storage\FileStorage;

class PHPDebugBar extends MY_Controller
{
    /**
     * @throws \DebugBar\DebugBarException
     */
    public function open_handler()
    {
        $this->output->enable_profiler(FALSE);

        $cache_path = FCPATH . 'storage/debugbar/';

        $debugbar = new DebugBar();

        $debugbar->setStorage(new FileStorage($cache_path));

        $openHandler = new OpenHandler($debugbar);

        $data = $openHandler->handle(NULL, FALSE, FALSE);

        $this->output->set_output($data);
    }
}
