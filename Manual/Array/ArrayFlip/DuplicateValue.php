<?php
// array_flip — Exchanges all keys with their associated values in an array
// array_flip ( array $array ) : array

$input = array("oranges", "apples", "oranges");
$flipped = array_flip($input);

var_dump($flipped);

// Test
/*
array(2) {
  ["oranges"]=>
  int(2)
  ["apples"]=>
  int(1)
}
 */