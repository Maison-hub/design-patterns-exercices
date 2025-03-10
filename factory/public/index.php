<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehicleFactory;

$car = VehicleFactory::createVehicle('car', 1, 'petrol');
$truck = VehicleFactory::createVehicle('truck', 1.5, 'diesel');
$bicycle = VehicleFactory::createVehicle('bicycle', 0, 'none');

echo $car->getCostPerKm() . PHP_EOL; // 1
echo $truck->getCostPerKm() . PHP_EOL; // 1.5
echo $bicycle->getCostPerKm() . PHP_EOL; // 0

$vehicle = VehicleFactory::createVehicleByCriteria(15, 10); // Returns a Bicycle
$vehicle = VehicleFactory::createVehicleByCriteria(25, 50); // Returns a Car
$vehicle = VehicleFactory::createVehicleByCriteria(30, 250); // Returns a Truck