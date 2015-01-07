<?php

namespace Widgets\Tutorials;

Class Hello_Dummy extends \Controller
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
        $this->c->load('request');
    }

    /**
     * Index
     * 
     * @param string $arg1 test argument1
     * @param string $arg2 test argument2
     * @param string $arg3 test argument3
     * 
     * @return void
     */
    public function index($arg1 = '', $arg2 = '', $arg3 = '')
    {
        echo '<pre>Request: <span class="string">'.$this->uri->getUriString().'</span></pre>';
        echo '<pre>Response: <span class="string">'.$arg1 .' - '.$arg2. ' - '.$arg3.'</span></pre>';
        echo '<pre>Global Request Object: <span class="string">'.$this->request->global->uri->getUriString().'</span></pre>';
        echo '<p></p>';
    }
}

/* End of file hello_dummy.php */
/* Location: .controllers/tutorials/hello_dummy.php */