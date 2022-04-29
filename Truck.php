<?php

require_once 'Vehicle.php';

class Truck extends Vehicle implements LightableInterface
{
    // Attributs
    private int $capacity;
    private int $currentLoad = 0;

    // Méthodes
    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity = $capacity;
    }

    public function calculateLoad()
    {
        if ($this->capacity == $this->currentLoad) {
            $status = "Full";
        } elseif ($this->capacity > $this->currentLoad) {
            $status = "Loading...";
        }
        return $status;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    /* public function loadTruck()
    {
        $loadingStatus = "";
        while ($this->currentLoad < $this->capacity) {
            $this->currentLoad++;
            $loadingStatus .= "Chargement... (" . $this->currentLoad . " kg)<br>";
        }
        return $loadingStatus;
    } */

    // Getters/setters
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    /* public function getEnergy(): string
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
    } */
}
