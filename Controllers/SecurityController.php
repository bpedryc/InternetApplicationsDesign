<?php

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
            if (md5($password) != $user->getPassword()){
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["email"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();
            $_SESSION["id"] = $user->getId();


            $url ="http://$_SERVER[HTTP_HOST]/projects/PAI2019/";
            header("Location: {$url}?page=profile");
            $this->render('profile');
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