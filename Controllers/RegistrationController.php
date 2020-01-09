<?php

require_once __DIR__.'\BaseController.php';

class RegistrationController extends BaseController
{

    public function getRegistrationForm()
    {
        $this->render('register');
    }

    public function register()
    {
        $this->render('login');
    }

}