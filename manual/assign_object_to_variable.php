<?php
class Object
{
    public $foo = "foo";
}

$objectVar = new Object();
$reference = &$objectVar;
$assigment = $objectVar;
$objectClone = clone $objectVar;
var_dump($objectVar, $reference, $assigment, $objectClone);
/*
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "foo"
}
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "foo"
}
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "foo"
}
object(Object)#2 (1) {
  ["foo"]=>
  string(3) "foo"
}
*/

$objectVar->foo = "bar";
var_dump($objectVar, $reference, $assigment, $objectClone);
/*
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
object(Object)#2 (1) {
  ["foo"]=>
  string(3) "foo"
}
*/

$objectVar = null;
var_dump($objectVar, $reference, $assigment, $objectClone);
/*
NULL
NULL
object(Object)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
object(Object)#2 (1) {
  ["foo"]=>
  string(3) "foo"
}
*/