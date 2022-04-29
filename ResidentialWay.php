<?php

include_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck || $vehicle instanceof Skateboard || $vehicle instanceof Bike) {
            $this->setCurrentVehicles($vehicle);
            $message = "vehicle added";
        } else {
            $message = "vehicle not added";
        }
        return $message;
    }
}
