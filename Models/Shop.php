<?php


class Shop
{
    private $id;
    private $name;
    private $address;
    private $photo;

    public function __construct(
        string $name,
        string $address,
        string $photo,
        int $id = null
    ){
        $this->name = $name;
        $this->address = $address;
        $this->photo = $photo;
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }
}