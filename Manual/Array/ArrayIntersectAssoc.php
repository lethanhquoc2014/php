<?php
/*
array_intersect_assoc — Computes the intersection of arrays with additional index check
array_intersect_assoc ( array $array1 , array $array2 [, array $... ] ) : array
array_intersect_assoc() returns an array containing all the values of array1 that are present in all the arguments. Note that the keys are also used in the comparison unlike in array_intersect().
 */

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");

$result = array_intersect_assoc($array1, $array2);
var_dump($result);

// Test
/*
array(1) {
  ["a"]=>
  string(5) "green"
}
 */