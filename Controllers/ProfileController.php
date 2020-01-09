<?php

require_once 'BaseController.php';
require_once 'Repository/UserRepository.php';

class ProfileController extends BaseController
{

    public function getProfileInfo(){
        $this->render('profile');
    }
}