<?php

abstract class HighWay 
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    public function __construct()
    {
        $this->setCurrentVehicles(array());
    }
    
    abstract public function addVehicle(Vehicle $vehicle);
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    
    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    
    public function getNbLane(): array
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): array
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}