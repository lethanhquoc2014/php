<?php
class Person
{
    public function showData()
    {
        echo "This is Person's showData()\n";
    }
}

class Employee extends Person
{
    public function showData()
    {
        parent::showData();
        echo "This is Employee's showData()\n";
    }
}

$employee = new Employee();
$employee->showData();