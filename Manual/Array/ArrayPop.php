<?php
/*
array_pop ( array &$array ) : mixed

Lấy ra phần tử cuối cùng của mảng
 */

$array = array(1,2,3);
$three = array_pop($array);
print_r($array);
print_r('Three: ' . $three . PHP_EOL);

$array = array(
    array('a' => 1, 'b' => 2),
    array('c' => 3),
);
$three = array_pop($array);
print_r($array);
print_r($three);

// Test
/*
Array
(
    [0] => 1
    [1] => 2
)
Three: 3
Array
(
    [0] => Array
        (
            [a] => 1
            [b] => 2
        )
)
Array
(
    [c] => 3
)
 */
