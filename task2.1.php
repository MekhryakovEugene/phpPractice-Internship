<?php

class Vehicle
{
    public string $model;
    public string $engineCount;
    public string $type;
    const CAR = "Car";
    const BUS = "Bus";
    const TRUCK = "Truck";

    public function __construct(){}
}

interface VehicleBuilderInterface
{
    public function set_model();
    public function set_engine_count();
    public function set_type();
    public function get_vehicle();
}

class BmwCarBuilder implements VehicleBuilderInterface
{
    private $vehicle;

    public function __construct(Vehicle $vehicle)
	{
        $this->vehicle = $vehicle;
    }

    public function set_model()
	{
        $this->vehicle->model = "BMW";
    }

    public function set_engine_count()
	{
        $this->vehicle->engineCount = 1;
    }

    public function set_type()
	{
        $this->vehicle->type = Vehicle::CAR;
    }

    public function get_vehicle(): Vehicle
	{
        return $this->vehicle;
    }
}

class BmwBusBuilder implements VehicleBuilderInterface
{
    private $vehicle;

    public function __construct(Vehicle $vehicle)
	{
        $this->vehicle = $vehicle;
    }

    public function set_model()
	{
        $this->vehicle->model = "BMW";
    }

    public function set_engine_count()
	{
        $this->vehicle->engineCount = 1;
    }

    public function set_type()
	{
        $this->vehicle->type = Vehicle::BUS;
    }

    public function get_vehicle(): Vehicle
	{
        return $this->vehicle;
    }
}

class vehicleDirector{
    public function  build(VehicleBuilderInterface $vehicleBuilderInterface): Vehicle
	{
        $vehicleBuilderInterface->set_model();
        $vehicleBuilderInterface->set_engine_count();
        $vehicleBuilderInterface->set_type();
        return $vehicleBuilderInterface->get_vehicle();
    }
}

$bmwCar = (new vehicleDirector())->build(new BmwCarBuilder(new Vehicle()));

$bmwBus = (new vehicleDirector())->build(new BmwBusBuilder(new Vehicle()));

print_r($bmwCar);
echo '<br/>';
print_r($bmwBus);