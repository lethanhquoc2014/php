<?php
class Person
{
    public function __construct()
    {
        echo "This is Person's __construct()\n";
    }

    public function __destruct()
    {
        echo "This is Person's __destruct()\n";
    }
}

class Employee extends Person
{
    public function __construct()
    {
        parent::__construct();
        echo "This is Employee's __construct()\n";
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "This is Employee's __destruct()\n";
    }
}

$employee = new Employee();