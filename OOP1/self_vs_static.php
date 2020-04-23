<?php
class HouseholdObject
{
    
    public static function create()
    {
        // return new self(); // return HouseholdObject
        return new static(); // return the child class
    }
}

class Couch extends HouseholdObject
{

}

class Table extends HouseholdObject
{

}

class Refrigerator extends HouseholdObject
{

}

var_dump(Couch::create());
var_dump(Table::create());