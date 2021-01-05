<?php

abstract class Person
{
    public $age;
    public $name;
    public $lastName;

    private static $peopleCount = 0;


    public function __construct(int $Age, string $Name, string $lastName)
    {
          $this->age = $Age;
        $this->name = $Name;
        $this->lastName = $lastName;
    }
}


class Family
{
    private $members = [];
    public $familyLastname;

    public function getAllMembers()
    {
        return $this->members;
    }

    public function __construct(MyParent $wife, MyParent $husband)
    {
        $wife->setSpouse($husband);
        $husband->setSpouse($wife);
        $this->members[] = $husband;
        $this->members[] = $wife;
        $this->familyLastName = $husband->lastName;
    }

    public function BearChild() :Person
    {
        $child = new Child();
        $child->father = $this->members[0];
        $child->mother = $this->members[1];
        $this->members[] = $child;
        return $child;
    }

    public function getMembersCount() :int
    {
        return count($this->members);
    }
}

class MyParent extends Person
{
    public $spouse;

    public function setSpouse(MyParent $newPartner)
    {
        $this->spouse = $newPartner;
    }
}

class Child extends Person
{
    public $sex;
    public $mother;
    public $father;

    public function __construct()
    {
        $this->age = 0;
        $this->sex = 'boy';
    }
}




$wife1 = new MyParent(42, "Irina", "Potapova");
$husband1 = new MyParent(42, "Alex", "Osadchuk");
$family1 = new Family($wife1, $husband1);


$child1 = $family1->BearChild();
echo "Family1 count: " . $family1->getMembersCount();
