<?php
// Creates an array by using one array for keys and another for its values
// array_combine ( array $keys , array $values ) : array

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
var_dump($c);

// Test
/*
array(3) {
  ["green"]=>
  string(7) "avocado"
  ["red"]=>
  string(5) "apple"
  ["yellow"]=>
  string(6) "banana"
}
 */