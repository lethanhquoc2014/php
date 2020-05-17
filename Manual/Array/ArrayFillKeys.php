<?php
// array_fill_keys — Fill an array with values, specifying keys
// array_fill_keys ( array $keys , mixed $value ) : array

$keys = array('foo', 5, 10, 'bar');

$result = array_fill_keys($keys, 'banana');
var_dump($result);

// Test
/*
array(4) {
  ["foo"]=>
  string(6) "banana"
  [5]=>
  string(6) "banana"
  [10]=>
  string(6) "banana"
  ["bar"]=>
  string(6) "banana"
}
 */