<?php
/*
array_intersect_key — Computes the intersection of arrays using keys for comparison
array_intersect_key ( array $array1 , array $array2 [, array $... ] ) : array
 */

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

$result = array_intersect_key($array1, $array2);

var_dump($result);

// Test
/*
array(2) {
  ["blue"]=>
  int(1)
  ["green"]=>
  int(3)
}
 */