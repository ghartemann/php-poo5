<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$toyota = new Car("blue", 4, "fuel");

try {
    $toyota->start();
} catch (Exception $exception) {
    echo 'Exception received  : ' . $exception->getMessage() . PHP_EOL;
    $toyota->setParkBrake(false);
    $toyota->start();
} finally {
    echo "Ma voiture roule comme un donut";
}
