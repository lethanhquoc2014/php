<?php
class Animal
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function speak()
    {
        // $this->getName() is late binding/dynamic binding
        // mean that the data will bind at runtime
        return $this->getName() . ' is speaking';
    }
}

class Dog extends Animal
{
    public function getName()
    {
        return 'Dog: ' . parent::getName();
    }
}

$dog = new Dog('Jacky');
var_dump($dog->getName());
var_dump($dog->speak());
$animal = new Animal('Mic');
var_dump($animal->speak());