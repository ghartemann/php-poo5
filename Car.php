<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // properties
    protected string $energy;
    protected int $energyLevel;
    private bool $ParkBrakeOn = true;

    // Méthodes
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start()
    {
        if ($this->ParkBrakeOn == true) throw new Exception("Can't move, park brake is on");
        else echo "Starting";
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    // Getters/setters
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake()
    {
        return $this->ParkBrakeOn;
    }

    public function setParkBrake($ParkBrakeOn)
    {
        $this->ParkBrakeOn = $ParkBrakeOn;
    }
}
