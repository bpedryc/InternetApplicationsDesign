<?php

class ProfileController extends BaseController
{

    public function getProfileInfo(){
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($_SESSION["id"]);

        $teaRepository = new TeaRepository();
        $teas = $teaRepository->getTeas($user->getId());

        $this->render('profile', ['user' => $user, 'teas' => $teas]);
    }
}