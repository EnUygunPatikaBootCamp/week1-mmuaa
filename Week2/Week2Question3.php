<?php

abstract class Vehicles
{
    public $brand = "";
    public $model = "";
    protected $numberOfWheels = 0;
    protected $wingSpan = 0;
    protected $licensePlate = 0;

    public function __construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->wingSpan = $wingSpan;
        $this->licensePlate = $licensePlate;
        $this->numberOfWheels = $numberOfWheels;
    }

    abstract function example();
}

class Car extends Vehicles
{
    public function __construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels){
        parent::__construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels);
    }

    public function example()
    {
        return "\n License Plate: ".$this->licensePlate."\n Brand:".$this->brand."\n Model:".$this->model."\n Number of Wheels:".$this->numberOfWheels."\n";
    }
}

class Motorcycle extends Vehicles
{
    public function __construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels) {
        parent::__construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels);
    }

    public function example()
    {
        return "\n License Plate: ".$this->licensePlate."\n Brand:".$this->brand."\n Model:".$this->model."\n Number of Wheels:".$this->numberOfWheels."\n";
    }
}

class Plane extends Vehicles
{
    public function __construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels) {
        parent::__construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels);
    }

    public function example()
    {
        return "\n Brand:".$this->brand."\n Model:".$this->model."\n Wing Span:".$this->wingSpan."\n";
    }
}

$car = new Car("Ferrari","Sf90 Stradale","","35 ASD 35 ",4);
echo $car->example();

$motorcycle =  new Motorcycle("BMW","1000RR","","35 ASD 35",2);
echo $motorcycle->example();

$plane =  new Plane("Boeing","737","95m","","");
echo $plane->example();
