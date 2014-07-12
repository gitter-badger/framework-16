<?php

/**
 * $app hello_world
 * 
 * @var Controller
 */
$app = new Controller(
    function ($c) {
        $c->load('view');


        // new Obullo\Log\Filters\Level;

        $this->logger->addFilter(
            LOGGER_MONGO, 
            'Obullo\Log\Filter\Level', 
            array(LOG_NOTICE, LOG_ALERT)
        );
    

        $this->logger->load(LOGGER_MONGO);
        $this->logger->info('HELLO INFO !!!!!');
        $this->logger->notice('HELLO NOTICE !!!!!');
        $this->logger->alert('HELLO ALERT !!!!!');
        $this->logger->push(LOGGER_MONGO);

        // $c->load('service/queue');
        // $this->queue->channel('Log');
        // $this->queue->push($route = 'Server1.logger', 'SendLog', array('log' => array('debug' => 'Test')));
        // $this->queue->push($route = 'Server1.logger', 'SendLog', array('message' => 'This is my message'));
        // $this->queue->push($route = 'Server1.logger', 'SendLog', array('log' => array('debug' => 'Test')));
    }
);

$app->func(
    'index',
    function () {

        $this->view->load(
            'hello_world',
            function () {
                $this->assign('name', 'Obullo');
                $this->assign('footer', $this->template('footer'));
            }
        );

    }
);

/* End of file hello_world.php */
/* Location: .public/tutorials/controller/hello_world.php */