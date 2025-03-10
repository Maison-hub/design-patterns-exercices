<?php

namespace App\Factory;

use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Bicycle;

class VehicleFactory {
    public static function createVehicle(string $type, $costPerKm, $fuelType) {
        return match ($type) {
            'car' => new Car($costPerKm, $fuelType),
            'truck' => new Truck($costPerKm, $fuelType),
            'bicycle' => new Bicycle($costPerKm, $fuelType),
            default => throw new \InvalidArgumentException("Unknown vehicle type"),
        };
    }

    public static function createVehicleByCriteria($distance, $weight) {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0, 'none');
        } elseif ($weight > 200) {
            return new Truck(1.5, 'diesel');
        } else {
            return new Car(1, 'petrol');
        }
    }
}