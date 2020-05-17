<?php
/*
array_merge_recursive — Merge one or more arrays recursively
array_merge_recursive ([ array $... ] ) : array
 */

$array1 = array(1,2,3);
$array2 = array(4,5,6);
$result = array_merge_recursive($array1, $array2);
print_r($result);

$array1 = array(
    'color' => array('yellow', 'blue'),
    'size' => array('small', 'medium')
);
$array2 = array(
    'color' => array('yellow', 'blue', 'black'),
    'size' => array('small', 'medium', 'large')
);
$result = array_merge_recursive($array1, $array2);
print_r($result);

$array1 = array(
    'color' => array('yellow', 'blue')
);
$array2 = array(
    'size' => array('small', 'medium', 'large')
);
$array3 = array(1,2,3);
$result = array_merge_recursive($array1, $array2, $array3);
print_r($result);

// Test
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
Array
(
    [color] => Array
        (
            [0] => yellow
            [1] => blue
            [2] => yellow
            [3] => blue
            [4] => black
        )

    [size] => Array
        (
            [0] => small
            [1] => medium
            [2] => small
            [3] => medium
            [4] => large
        )

)
Array
(
    [color] => Array
        (
            [0] => yellow
            [1] => blue
        )

    [size] => Array
        (
            [0] => small
            [1] => medium
            [2] => large
        )

    [0] => 1
    [1] => 2
    [2] => 3
)
 */
