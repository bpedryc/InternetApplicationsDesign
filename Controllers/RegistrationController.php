<?php

require_once __DIR__.'\BaseController.php';

class RegistrationController extends BaseController
{
    public function __construct()
    {

    }

    public function getRegistrationForm()
    {
        $this->render('register');
    }

    public function register()
    {

    }

}