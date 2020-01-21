<?php


class Admin
{
    private $id;
    private $userId;

    public function __construct(
        int $userId,
        int $id = null
    ){
        $this->userId = $userId;
        $this->id = $id;
    }

    public function getUserId() : int
    {
        return $this->userId;
    }

    public function getId() : int
    {
        return $this->id;
    }
}