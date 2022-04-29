<?php

include_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->setCurrentVehicles($vehicle);
            $message = "vehicle added";
        } else {
            $message = "vehicle not added";
        }
        return $message;
    }
}
