<?php

namespace Widgets\Tutorials;

class Hello_World extends \Controller
{
     // use \View\Layout\Base;

    /**
     * Loader
     * 
     * @return void
     */
    public function load()
    {
        $this->c['view'];
    }

    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        $this->view->load(
            'hello_world', 
            [
                'title' => 'Hello World !',
            ]
        );
    }

}