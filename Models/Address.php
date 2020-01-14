<?php


class Address
{
    private $id;
    private $country;
    private $state;
    private $city;
    private $street;

    public function __construct(
        string $country,
        string $state,
        string $city,
        string $street,
        int $id = null
    ){
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->street = $street;
        $this->id = $id;
    }

    public function getCountry(){
        return $this->country;
    }

    public function getState(){
        return $this->state;
    }

    public function getCity(){
        return $this->city;
    }

    public function getStreet(){
        return $this->street;
    }
}