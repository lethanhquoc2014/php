<?php
abstract class HouseholdObject
{
    
    public static function create()
    {
        return new static();
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