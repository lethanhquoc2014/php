<?php
/*
array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = FALSE ]] ) : array

Tạo một mảng con từ mảng nhập vào.
$offset là vị trí, ko phải là key của mảng.
 */

$array = array(1, 2, 3, 4, 5);

print_r(array_slice($array, 2));
print_r(array_slice($array, -2));
print_r(array_slice($array, 2, 2));
print_r(array_slice($array, -2, 1));
print_r(array_slice($array, 2, -1));

// Test
/*
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
)
Array
(
    [0] => 4
    [1] => 5
)
Array
(
    [0] => 3
    [1] => 4
)
Array
(
    [0] => 4
)
Array
(
    [0] => 3
    [0] => 4
)
 */
