<?php
/*
array_fill — Fill an array with values
array_fill ( int $start_index , int $num , mixed $value ) : array
 */

$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
var_dump($a);
var_dump($b);

// Test
/*
array(6) {
  [5]=>
  string(6) "banana"
  [6]=>
  string(6) "banana"
  [7]=>
  string(6) "banana"
  [8]=>
  string(6) "banana"
  [9]=>
  string(6) "banana"
  [10]=>
  string(6) "banana"
}
array(4) {
  [-2]=>
  string(4) "pear"
  [0]=>
  string(4) "pear"
  [1]=>
  string(4) "pear"
  [2]=>
  string(4) "pear"
}
 */