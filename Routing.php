<?php

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
            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'register' => [
                'controller' => 'RegistrationController',
                'action' => 'register'
            ],
            'profile' => [
                'controller' => 'ProfileController',
                'action' => 'getProfileInfo'
            ],
            'shops' => [
                'controller' => 'ShopsController',
                'action' => 'getAvailableShops'
            ],
            'get_collection' => [
                'controller' => 'ProfileController',
                'action' => 'getCollection'
            ],
            'tea' => [
                'controller' => 'TeaController',
                'action' => 'getTea'
            ],
            'add_tea' => [
                'controller' => 'ProfileController',
                'action' => 'addTea'
            ],
            'delete_tea' => [
                'controller' => 'TeaController',
                'action' => 'deleteTea'
            ],
            'get_collection_size' => [
                'controller' => 'ProfileController',
                'action' => 'getCollectionSize'
            ],
            'admin' => [
                'controller' => 'AdminController',
                'action' => 'accessAdminPanel'
            ],
            'products' => [
                'controller' => 'ProductsController',
                'action' => 'showProducts'
            ],
            'get_products' => [
                'controller' => 'ProductsController',
                'action' => 'getProducts'
            ],
            'delete_user' => [
                'controller' => 'AdminController',
                'action' => 'deleteUser'
            ],
            'get_users' => [
                'controller' => 'AdminController',
                'action' => 'getUsers'
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