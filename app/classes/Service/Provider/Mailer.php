<?php

namespace Service;

use Obullo\Mail\Connection;

/**
 * Mailer Provider
 *
 * @category  Service
 * @package   Mail
 * @author    Obullo Framework <obulloframework@gmail.com>
 * @copyright 2009-2014 Obullo
 * @license   http://opensource.org/licenses/MIT MIT license
 * @link      http://obullo.com/docs/services
 */
Class Mailer implements ServiceInterface
{
    /**
     * Registry
     *
     * @param object $c container
     *
     * Providers : Mandrill, Smtp, Queue ..
     * 
     * @return void
     */
    public function register($c)
    {
        $c['provider:mailer'] = function ($params = array('provider' => 'Mandrill', 'from' => '')) use ($c) {
            $mailer = new Connection($c, $params);
            $mailer->from($params['from']);
            return $mailer;
        };
    }
}

// END Mailer class

/* End of file Mailer.php */
/* Location: .classes/Service/Mailer.php */