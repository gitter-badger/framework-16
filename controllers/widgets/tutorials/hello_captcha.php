<?php

namespace Widgets\Tutorials;

Class Hello_Captcha extends \Controller
{
    /**
     * Loader
     * 
     * @return void
     */
    public function load()
    {
        $this->c->load('view');
        $this->c->load('url');
        $this->c->load('form');
        $this->c->load('post');
    }

    /**
     * Index
     * 
     * @return void
     */
    public function index()
    {
        if ($this->post['dopost']) {

            $this->c->load('validator');
            
            $this->validator->setRules('email', 'Email', 'required|email');
            $this->validator->setRules('password', 'Password', 'required|min(6)');
            $this->validator->setRules('captcha_answer', 'Captcha', 'required|callback_captcha');

            $this->validator->func(
                'callback_captcha',
                function () {
                    if ($this->c->load('service/captcha')->check($this->post['captcha_answer']) == false) {
                        $this->setMessage('callback_captcha', 'Wrong Captcha Code');
                        return false;
                    }
                    return true;
                }
            );
            if ($this->validator->isValid()) {
                $this->form->setMessage('Form Validation Success ! ');  // Set flash notice using Session Class.
            }
        }

        $this->view->load(
            'hello_captcha',
            function () {
                $this->assign('name', 'Obullo');
                $this->assign('title', 'Hello Captcha !');
                $this->layout('welcome');
            }
        );
    }
}


/* End of file hello_captcha.php */
/* Location: .controllers/tutorials/hello_captcha.php */