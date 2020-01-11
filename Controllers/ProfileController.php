<?php

require_once 'BaseController.php';
require_once 'Repository/UserRepository.php';

class ProfileController extends BaseController
{

    public function getProfileInfo(){
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($_SESSION["id"]);

        $this->render('profile', ['user' => $user]);
    }
}