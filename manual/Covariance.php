<?php
abstract class Animal
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function speak();
}

class Dog extends Animal
{
    public function speak()
    {
        echo $this->name . " barks";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        echo $this->name . " meows";
    }
}

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        return new Cat($name);
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog
    {
        return new Dog($name);
    }
}

$kitty = (new CatShelter)->adopt('Ricky');
$kitty->speak();
echo PHP_EOL;

$doggy = (new DogShelter)->adopt("Mavrick");
$doggy->speak();
echo PHP_EOL;

// result
/*
Ricky meows
Mavrick barks
 */