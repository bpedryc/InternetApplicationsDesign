<?php

//in progress
class AdminController extends BaseController
{
    public function accessAdminPanel(){

        $adminRepository = new AdminRepository();
        $admin = $adminRepository->getAdmin($_SESSION['id']);

        if ($admin == null){
            $url ="http://$_SERVER[HTTP_HOST]/projects/PAI2019/";
            header("Location: {$url}/?page=profile");
            return;
        }

        $this->render('admin');
    }
}