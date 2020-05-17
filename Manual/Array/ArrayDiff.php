<?php
// array_diff — Computes the difference of arrays
// array_diff ( array $array1 , array $array2 [, array $... ] ) : array

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");

$result = array_diff($array1, $array2);
var_dump($result);

// Test
/*
array(1) {
  [1]=>
  string(4) "blue"
}
 */