<?php

class TeaController extends BaseController
{
    public function getTea(){
        if(!isset($_GET['teaId'])){
            http_response_code(404);
            return;
        }

        $teaRepository = new TeaRepository(Database::establishConnection());
        $tea_serialized = $teaRepository->getTea($_GET['teaId']);
        $tea = Tea::deserialize($tea_serialized);

        $this->render('tea', ['tea' => $tea, 'imgLink' => 'Public/img/tea_'.strtolower(explode(" ", $tea->getType())[0]).'.png']);
    }

    public function deleteTea(){
        if(!isset($_GET['teaId'])){
            http_response_code(404);
            return;
        }

        $teaRepository = new TeaRepository(Database::establishConnection());
        $teaRepository->removeTea($_GET['teaId']);

        $url ="http://$_SERVER[HTTP_HOST]/projects/PAI2019/";
        header("Location: {$url}?page=profile");
        return;
    }
}