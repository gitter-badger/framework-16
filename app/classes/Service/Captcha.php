<?php

namespace Service;

use Obullo\Container\Container;
use Obullo\Captcha\Adapter\Image;
use Obullo\ServiceProviders\ServiceInterface;

class Captcha implements ServiceInterface
{
    /**
     * Registry
     *
     * @param object $c container
     * 
     * @return void
     */
    public function register(Container $c)
    {
        $c['captcha'] = function () use ($c) {

            $captcha = new Image($c);
            $captcha->setDriver('secure');  // or set to "cool" with no background
            $captcha->setPool('alpha');
            $captcha->setChar(5);
            $captcha->setWave(false);
            $captcha->setFont(array('NightSkK','Almontew', 'Fordd'));
            $captcha->setFontSize(39);
            $captcha->setHeight(98);
            $captcha->setColor(array('red','black','blue'));
            $captcha->setNoiseColor(array('red','black','blue'));
            
            return $captcha;
        };
    }
}

// END Captcha service

/* End of file Captcha.php */
/* Location: .classes/Service/Captcha.php */