<?php
// Returns an array of values representing a single column from the input array.

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$firstNames = array_column($records, 'first_name');
var_dump($firstNames);

$firstNames = array_column($records, 'first_name', 'id');
var_dump($firstNames);

// Test
/*
array(4) {
  [0]=>
  string(4) "John"
  [1]=>
  string(5) "Sally"
  [2]=>
  string(4) "Jane"
  [3]=>
  string(5) "Peter"
}
array(4) {
  [2135]=>
  string(4) "John"
  [3245]=>
  string(5) "Sally"
  [5342]=>
  string(4) "Jane"
  [5623]=>
  string(5) "Peter"
}
 */