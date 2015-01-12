<?php

namespace Widgets\Tutorials;

Class Hello_Test extends \Controller
{
    /**
     * Loader
     * 
     * @return void
     */
    public function load()
    {
        $this->c->load('uri');
        $this->c->load('view');
        $this->c->load('layer');
        $this->c->load('request');
    }

    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        echo $this->layer->get('views/header');
        echo $this->layer->get('welcome/welcome_dummy/1/2/3');
        echo $this->layer->get('views/header');
        echo $this->layer->get('welcome/welcome_dummy/1/2/3');
        echo $this->layer->get('widgets/tutorials/hello_dummy/1/2/6');
        echo $this->layer->get('views/header');

        $this->view->load('hello_world');
    }
}


/* End of file hello_test.php */
/* Location: .controllers/tutorials/hello_test.php */