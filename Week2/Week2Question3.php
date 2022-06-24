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
        return "\n Plaka No: ".$this->licensePlate."\n brand:".$this->brand."\n Model:".$this->model."\n Tekerlek Sayisi:".$this->numberOfWheels."\n";
    }
}

class Motorcycle extends Vehicles
{
    public function __construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels) {
        parent::__construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels);
    }

    public function example()
    {
        return "\n Plaka No: ".$this->licensePlate."\n brand:".$this->brand."\n Model:".$this->model."\n Tekerlek Sayisi:".$this->numberOfWheels."\n";
    }
}

class Plane extends Vehicles
{
    public function __construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels) {
        parent::__construct($brand, $model,$wingSpan,$licensePlate,$numberOfWheels);
    }

    public function example()
    {
        return "\n Brand:".$this->brand."\n Model:".$this->model."\n Tekerlek Sayisi:".$this->wingSpan."\n";
    }
}

$car = new Car("mercedes","c180","","35 LGG 78",4);
echo $car->example();

$motorcycle =  new Motorcycle("yamaha","r25","","35 FTH 42",2);
echo $motorcycle->example();

$plane =  new Plane("ucak","ucuyor","95m","","");
echo $plane->example();
