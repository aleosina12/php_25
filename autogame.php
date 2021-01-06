<?php

interface ICanDrive
{
    public function drive(Vehicle $otherVehicle);
    public function GetSpeed() :int;
}



abstract class Vehicle implements ICanDrive {

    protected $name;

    public function start() {
        echo "<br/>".$this->name. " - Engine started!";
    }

    public function stop() {

        echo "<br/>".$this->name. " - Engine stopped!";
    }


    public function drive (Vehicle $otherMachine)
    {
        echo "<br/>".$this->name. " is on the ride!";
    }


    public function setName($name) {
        $this->name = $name;
    }

    public function GetSpeed() :int
    {
        echo "<br/>My Speed is ".$this->speed. " mph";
    }

    abstract public function mileage();
}



class Car extends Vehicle {
    public $speed = 100;
    public function mileage() {
        echo "I am " . $this->name . "<br/>";
        echo "My mileage range is - 15 to 22 Km/L";
    }

}


class Truck extends Vehicle {
    public $speed = 50;
    public function mileage() {
        echo "<br/> <br/>I am " . $this->name . "<br/>";
        echo "My mileage range is - 35 to 47 Km/L";
    }

}


$car = new Car();
$car->setName("BMW X5");
$car->mileage();
$car->stop();
$car->Drive($car);
$car->GetSpeed();


$truck = new Truck();
$truck->setName("Volvo");
$truck->mileage();
$truck->start();