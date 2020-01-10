<?php

require_once 'Controllers/SecurityController.php';
require_once 'Controllers/RegistrationController.php';
require_once 'Controllers/ProfileController.php';

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