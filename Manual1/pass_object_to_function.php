<?php
class Object
{
    public $foo = "foo";
}

function changeObject($obj)
{
    $obj->foo = "bar";
    var_dump($obj);
}

$object = new Object();
changeObject($object);
var_dump($object);

/*
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
*/