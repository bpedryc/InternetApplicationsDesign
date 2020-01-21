<?php

class Tea
{
    private $id;
    private $name;
    private $type;
    private $leafAmount;
    private $temperature;
    private $steepingTime;
    private $notes;
    private $userId;

    public function __construct(
        string $name,
        string $type,
        float $leafAmount,
        int $temperature,
        int $steepingTime,
        string $notes,
        int $userId = null,
        int $id = null
    ){
        $this->name = $name;
        $this->type = $type;
        $this->leafAmount = $leafAmount;
        $this->temperature = $temperature;
        $this->steepingTime = $steepingTime;
        $this->notes = $notes;
        $this->userId = $userId;
        $this->id = $id;
    }

    public static function deserialize($serialized) : Tea
    {
        return new self(
            $serialized['Name'],
            $serialized['Type'],
            $serialized['LeafAmount'],
            $serialized['Temperature'],
            $serialized['SteepingTime'],
            $serialized['Notes'],
            $serialized['UserId'],
            $serialized['Id']
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getLeafAmount(): float
    {
        return $this->leafAmount;
    }

    public function getTemperature(): int
    {
        return $this->temperature;
    }

    public function getSteepingTime(): int
    {
        return $this->steepingTime;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}