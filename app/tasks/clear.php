<?php

namespace Tasks;

use Obullo\Cli\Controller\ClearController;

/**
 * Clear command
 */
Class Clear extends \Controller
{
    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        $clear = new ClearController($this->c, func_get_args());
        $clear->run();
    }
}

/* End of file clear.php */
/* Location: .app/tasks/controller/clear.php */