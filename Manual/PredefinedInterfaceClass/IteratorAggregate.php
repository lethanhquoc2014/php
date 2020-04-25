<?php
class MyData implements IteratorAggregate
{
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct()
    {
        $this->property4 = "last property";
    }

    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}

$myData = new MyData;
foreach ($myData as $key => $value) {
    var_dump($key, $value);
}