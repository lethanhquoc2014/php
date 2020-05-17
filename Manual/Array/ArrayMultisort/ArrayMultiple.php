<?php
/*
array_multisort — Sort multiple or multi-dimensional arrays
array_multisort ( array &$array1 [, mixed $array1_sort_order = SORT_ASC [, mixed $array1_sort_flags = SORT_REGULAR [, mixed $... ]]] ) : bool
 */

$array1 = array(10, 100, 100, 0);
$array2 = array(1, 3, 2, 4);

array_multisort($array1, $array2);

print_r($array1);
print_r($array2);

// Test
/*
Array
(
    [0] => 0
    [1] => 10
    [2] => 100
    [3] => 100
)
Array
(
    [0] => 4
    [1] => 1
    [2] => 2
    [3] => 3
)
 */