<?php

require_once 'BaseController.php';
require_once 'Repository/UserRepository.php';

class SecurityController extends BaseController
{
    public function login()
    {
        $userRepository = new UserRepository();

        if($this->isPost()){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $userRepository->getUser($email);

            if (!$user){
                $this->render('login', ['messages' => ['An account with this email address doesn\'t exist!']]);
                return;
            }
            if ($password != $user->getPassword()){
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["id"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();


            $url ="http://$_SERVER[HTTP_HOST]/projects/PAI2019/";
            header("Location: {$url}?page=profile");
            $this->render('profile', ['user' => $user, 'messages' => [$user->getFirstName(), $user->getLastName()]]);
            return;
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out!']]);
    }
}