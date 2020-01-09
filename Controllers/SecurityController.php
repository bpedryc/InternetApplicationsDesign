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
            $this->render('profile', ['messages' => [$user->getFirstName(), $user->getLastName()]]);
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();
    }
}