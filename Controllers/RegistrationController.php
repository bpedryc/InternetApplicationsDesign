<?php

require_once 'BaseController.php';

class RegistrationController extends BaseController
{

    public function register()
    {

        if ($this->isPost()){
            $this->render('login');
            return;
        }
        $this->render('register');
    }

}