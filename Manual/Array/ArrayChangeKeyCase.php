<?php
// Changes the case of all keys in an array

$array = array('one' => 1, 'two' => 2);

$lowerKeys = array_change_key_case($array);
$upperKeys = array_change_key_case($array, CASE_UPPER);
var_dump($lowerKeys);
var_dump($upperKeys);

// Test
/*
array(2) {
  ["one"]=>
  int(1)
  ["two"]=>
  int(2)
}
array(2) {
  ["ONE"]=>
  int(1)
  ["TWO"]=>
  int(2)
}
 */

