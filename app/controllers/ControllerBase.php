<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    protected function initialize(){
        if($this->session->get('auth')){
            $this->view->setTemplateAfter('main');
        }else{
            $this->view->setTemplateAfter('login');
        }

    }
}
