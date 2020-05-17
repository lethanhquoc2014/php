<?php
// array_diff_assoc — Computes the difference of arrays with additional index check
// array_diff_assoc ( array $array1 , array $array2 [, array $... ] ) : array
// Note: This function only checks one dimension of a n-dimensional array. Of course you can check deeper dimensions by using, for example, array_diff_assoc($array1[0], $array2[0]);.

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "black", "yellow", "red");

$result = array_diff_assoc($array1, $array2);
var_dump($result);

// Test
/*
array(3) {
  ["b"]=>
  string(5) "brown"
  ["c"]=>
  string(4) "blue"
  [0]=>
  string(3) "red"
}
 */