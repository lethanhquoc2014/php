<?php
abstract class Dog
{
    private $name;
    private $gender;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    abstract public function bark();
}

class Rottweiler extends Dog
{
    public function bark()
    {
        echo "WOOOF!! WOOOF! WOOOF!" . "<br>";
    }
}

class Chihuahua extends Dog
{
    public function bark()
    {
        echo "yip! yip! yip!" . "<br>";
    }
}

$rottweiler = new Rottweiler('Rocky');
$rottweiler->bark();

