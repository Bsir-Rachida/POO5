<?php
require_once 'LightableInterface.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

require_once 'Truck.php';
$truck = new truck('brown', 3, 'fuel', 30);
$truck->setEnergy('electric');
$truck->setCapacity(120);
$truck->loading();
var_dump($truck);

echo $truck->forward();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du véhicule: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br>';


require_once 'MotorWay.php';
$motor = new MotorWay(4, 130);
echo $motor->addVehicle($car);
var_dump($motor);

require_once 'PedestrianWay.php';
$pedestrian = new PedestrianWay(1, 10);
echo $pedestrian->addVehicle($truck);
var_dump($pedestrian);

require_once 'ResidentialWay.php';
$residential = new ResidentialWay(2, 50);
echo $residential->addVehicle($bicycle);
var_dump($residential);

try {
    $car->start();
}catch (Exception $e){
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
};


echo $car->switchOn();
echo $car->switchOff();

$bicycle->setCurrentSpeed(11);
echo $bicycle->switchOn();
echo $bicycle->switchOff();








