<?php
// array_flip — Exchanges all keys with their associated values in an array
// array_flip ( array $array ) : array

$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

var_dump($flipped);

// Test
/*
array(3) {
  ["oranges"]=>
  int(0)
  ["apples"]=>
  int(1)
  ["pears"]=>
  int(2)
}
 */