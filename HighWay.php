<?php

abstract class HighWay
{
    // Attributs
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    // Méthodes 
    abstract public function addVehicle(Vehicle $vehicle);

    // Getters/setters
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}
