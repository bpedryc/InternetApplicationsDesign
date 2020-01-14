<?php

class Tea
{
    private $id;
    private $name;
    private $type;
    private $leafAmount;
    private $temperature;
    private $steepingTime;

    public function __construct(
        string $name,
        string $type,
        float $leafAmount,
        int $temperature,
        int $steepingTime,
        int $id = null
    ){
        $this->name = $name;
        $this->type = $type;
        $this->leafAmount = $leafAmount;
        $this->temperature = $temperature;
        $this->steepingTime = $steepingTime;
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getLeafAmount(){
        return $this->leafAmount;
    }

    public function getTemperature(){
        return $this->temperature;
    }

    public function getSteepingTime(){
        return $this->steepingTime;
    }
}