<?php

class AdminController extends BaseController
{
    public function accessAdminPanel(){

        if (!$this->isAdmin()){
            $url ="http://$_SERVER[HTTP_HOST]/projects/PAI2019/";
            header("Location: {$url}/?page=profile");
            return;
        }

        $this->render('admin');
    }

    public function isAdmin(){

        if($_SESSION['role'] == 'admin'){
            return true;
        }
        return false;
    }

    public function getUsers(){
        if (!$this->isAdmin()){
            http_response_code(403);
            return;
        }

        $userRepository = new UserRepository(Database::establishConnection());
        $users = $userRepository->getAllUsers();
        header('Content-type: application/json');
        http_response_code(200);
        echo $users ? json_encode($users) : '';
    }

    public function deleteUser(){

        if (!isset($_GET['userId'])){
            http_response_code(404);
            return;
        }

        if (!$this->isAdmin()){
            http_response_code(403);
            return;
        }

        $userRepository = new UserRepository(Database::establishConnection());
        $userRepository->deleteUser($_GET['userId']);
    }

}