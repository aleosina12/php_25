<?php

interface ICanDrive
{
    public function drive(Vehicle $myVehicle);
    public function GetSpeed() :int;
}



abstract class Vehicle implements ICanDrive {
    protected $maxSpeed;
    protected $name;

    public function start() {
        echo "<br/>".$this->name. " - Engine started!";
    }

    public function stop() {

        echo "<br/>".$this->name. " - Engine stopped!";
    }


    public function drive (Vehicle $myVehicle)
    {
        echo "<br/>".$this->name. " has started off!";
    }


    public function setName($name) {
        $this->name = $name;
    }

    public function GetSpeed() :int
        {
            echo "<br/>$this->name max speed is ".$this->maxSpeed. " mph";
            return $this->maxSpeed;

    }

    abstract public function mileage();
}



class Car extends Vehicle {
 public $maxSpeed = 150;

    public function drive (Vehicle $myVehicle)
    {
        echo "<br/>".$this->name. " has started ffffoff!";
        echo "<br/>".$this->name. " can generate Nitrous Oxyde!";
    }


    public function mileage() {
        echo "I am " . $this->name . "<br/>";
        echo "My mileage range is - 15 to 22 Km/L";
    }

}


class Truck extends Vehicle {
    public $maxSpeed = 80;

    public function drive (Vehicle $myVehicle)
    {
        echo "<br/>".$this->name. " has started ffffoff!";
        echo "<br/>".$this->name. " can use SCOOP!!";
    }

    public function mileage() {
        echo "<br/> <br/>I am " . $this->name . "<br/>";
        echo "My mileage range is - 35 to 47 Km/L";
    }

}


$car = new Car();
$car->setName("BMW X5");
$car->mileage();
$car->start();
$car->Drive($car);
$car->GetSpeed();
$car->stop();


$truck = new Truck();
$truck->setName("Volvo");
$truck->mileage();
$truck->start();
$truck->GetSpeed();
$truck->Drive($truck);
$truck->stop();
