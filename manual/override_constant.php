<?php
abstract class dbObject
{   
    const TABLE_NAME='undefined';
   
    public static function GetAll()
    {
        $c = get_called_class();
        return "SELECT * FROM `".$c::TABLE_NAME."`";
    }   
}

class dbPerson extends dbObject
{
    const TABLE_NAME='persons';
}

class dbAdmin extends dbPerson
{
    const TABLE_NAME='admins';
}

var_dump(dbPerson::GetAll());
var_dump(dbAdmin::GetAll());
/*
string(23) "SELECT * FROM `persons`"
string(22) "SELECT * FROM `admins`"
*/