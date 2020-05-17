<?php
/*
array_intersect — Computes the intersection of arrays
array_intersect ( array $array1 , array $array2 [, array $... ] ) : array
 */

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");

$result = array_intersect($array1, $array2);

var_dump($result);

// Test
/*
array(2) {
  ["a"]=>
  string(5) "green"
  [0]=>
  string(3) "red"
}
 */