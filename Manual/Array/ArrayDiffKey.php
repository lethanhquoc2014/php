<?php
// array_diff_key — Computes the difference of arrays using keys for comparison
// array_diff_key ( array $array1 , array $array2 [, array $... ] ) : array
// This function only checks one dimension of a n-dimensional array. Of course you can check deeper dimensions by using array_diff_key($array1[0], $array2[0]);.

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

var_dump(array_diff_key($array1, $array2));

// Test
/*
array(3) {
  ["blue"]=>
  int(1)
  ["red"]=>
  int(2)
  ["purple"]=>
  int(4)
}
 */