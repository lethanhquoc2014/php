<?php
/*
array_push ( array &$array [, mixed $... ] ) : int

Thêm nhiều phần tử vào cuối mảng. Nếu chỉ thêm 1 phần tử thì không nên dùng hàm này.
 */

$array = array(1, 2);
array_push($array, 4, 5);
print_r($array);

$array = array('a' => 1, 'b' => 2);
array_push($array, 4, 5);
print_r($array);

$array = array(
    array(1, 2),
    array(3, 4),
);
array_push($array, array(5,6));
print_r($array);

// Test
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 4
    [3] => 5
)
Array
(
    [a] => 1
    [b] => 2
    [0] => 4
    [1] => 5
)
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
        )

    [1] => Array
        (
            [0] => 3
            [1] => 4
        )

    [2] => Array
        (
            [0] => 5
            [1] => 6
        )

)
 */
