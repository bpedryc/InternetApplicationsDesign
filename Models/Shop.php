<?php


class Shop
{
    private $id;
    private $name;
    private $addressId;
    private $photo;

    public function __construct(
        string $name,
        int $addressId,
        string $photo,
        int $id = null
    ){
        $this->name = $name;
        $this->addressId = $addressId;
        $this->photo = $photo;
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddressId(): int
    {
        return $this->addressId;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }
}