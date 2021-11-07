<?php
require_once 'LightableInterface.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
$bicycle->setCurrentSpeed(11);

$car = new Car('green', 4, 'electric');



echo $car->switchOn();
echo $car->switchOff();


echo $bicycle->switchOn();
echo $bicycle->switchOff();








