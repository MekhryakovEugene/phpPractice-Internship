<?php

class Vehicle{
    public $model;
    public $engineCount;
    public $type;
    const CAR = "Car";
    const BUS = "Bus";
    const TRUCK = "Truck";

    public function __construct(){}
}

interface VehicleBuilderInterface{
    public function setModel();
    public function setEngineCount();
    public function setType();
    public function getVehicle();
}

class BmwCarBuilder implements VehicleBuilderInterface{
    private $vehicle;

    public function __construct(Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }

    public function setModel(){
        $this->vehicle->model = "BMW";
    }

    public function setEngineCount(){
        $this->vehicle->engineCount = 1;
    }

    public function setType(){
        $this->vehicle->type = Vehicle::CAR;
    }

    public function  getVehicle(){
        return $this->vehicle;
    }
}

class BmwBusBuilder implements VehicleBuilderInterface{
    private $vehicle;

    public function __construct(Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }

    public function setModel(){
        $this->vehicle->model = "BMW";
    }

    public function setEngineCount(){
        $this->vehicle->engineCount = 1;
    }

    public function setType(){
        $this->vehicle->type = Vehicle::BUS;
    }

    public function  getVehicle(){
        return $this->vehicle;
    }
}

class vehicleDirector{
    public function  build(VehicleBuilderInterface $vehicleBuilderInterface){
        $vehicleBuilderInterface->setModel();
        $vehicleBuilderInterface->setEngineCount();
        $vehicleBuilderInterface->setType();
        return $vehicleBuilderInterface->getVehicle();
    }
}

$bmwCar = (new vehicleDirector())->build(new BmwCarBuilder(new Vehicle()));

$bmwBus = (new vehicleDirector())->build(new BmwBusBuilder(new Vehicle()));

print_r($bmwCar);
echo '<br/>';
print_r($bmwBus);