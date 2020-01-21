<?php

class ProfileController extends BaseController
{

    public function getProfileInfo(){
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($_SESSION["email"]);

        $this->render('profile', ['user' => $user]);
    }

    public function getCollection(){
        $teaRepository = new TeaRepository();
        $teas = $teaRepository->getTeas($_SESSION['id'], $_GET['pagenr']);

        header('Content-type: application/json');
        http_response_code(200);

        echo $teas ? json_encode($teas) : '';
    }

    public function addTea(){
        $tea = new Tea(
            $_GET['Name'],
            $_GET['Type'],
            $_GET['LeafAmount'],
            $_GET['Temperature'],
            $_GET['SteepingTime'],
            $_GET['Notes'],
            $_GET['UserId']
        );

        $teaRepository = new TeaRepository();
        $teaRepository->insertTea($tea);
    }

    public function getCollectionSize(){
        $teaRepository = new TeaRepository();
        $collectionSize = $teaRepository->getTeaCount($_SESSION['id']);

        header('Content-type: application/json');
        http_response_code(200);
        echo $collectionSize;
    }
}