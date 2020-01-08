<?php

require_once __DIR__.'\Controllers\SecurityController.php';
require_once __DIR__.'\Controllers\RegistrationController.php';

class Routing
{
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
            'registration' => [
                'controller' => 'RegistrationController',
                'action' => 'getRegistrationForm'
            ],
            'register' => [
                'controller' => 'RegistrationController',
                'action' => 'register'
            ],
            'profile' => [
                'controller' => 'ProfileController',
                'action' => 'getProfileInfo'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])){
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}