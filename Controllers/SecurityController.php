<?php

require_once __DIR__.'\BaseController.php';

class SecurityController extends BaseController
{
    public function __construct()
    {

    }

    public function login()
    {
        $this->render('login');
    }
}