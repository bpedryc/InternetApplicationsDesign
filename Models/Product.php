<?php

class Product
{
    private $id;
    private $price;
    private $description;
    private $teaId;

    public function __construct(
        int $price,
        string $description,
        int $teaId,
        int $id = null
    ){
        $this->price = $price;
        $this->description = $description;
        $this->teaId = $teaId;
        $this->id = $id;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getTeaId(){
        return $this->teaId;
    }
}