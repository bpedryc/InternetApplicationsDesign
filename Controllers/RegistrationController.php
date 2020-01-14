<?php

class RegistrationController extends BaseController
{

    public function register()
    {

        if ($this->isPost()){

            $name = explode(" ", $_POST['name']);
            $firstName = $name[0];
            $lastName = $name[1];

            $email = $_POST['email'];
            $password = $_POST['password'];
            $birthDate = $_POST['birthDate'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $street = $_POST['street'];

            //start: I should make a transaction out of this
            $addressRepository = new AddressRepository();
            $addressId = $addressRepository->insertAddress(
                new Address($country, $state, $city, $street)
            );

            $userRepository = new UserRepository();
            $userRepository->insertUser(
                new User($email, $password, $firstName, $lastName, $birthDate, $addressId)
            );
            //end

            $url ="http://$_SERVER[HTTP_HOST]/projects/PAI2019/";
            header("Location: {$url}?page=login");
            return;
        }
        $this->render('register');
    }

}