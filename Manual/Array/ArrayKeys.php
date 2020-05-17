<?php
/*
array_keys — Return all the keys or a subset of the keys of an array
array_keys ( array $array , mixed $search_value [, bool $strict = FALSE ] ) : array
 */

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("1", "red", "green", 1, 1);
print_r(array_keys($array, 1, true)); // compare ===

$array = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);
print_r(array_keys($array));

// Test
/*
Array
(
    [0] => 0
    [1] => color
)
Array
(
    [0] => 3
    [1] => 4
)
Array
(
    [0] => 3
    [1] => 4
)
Array
(
    [0] => color
    [1] => size
)

 */