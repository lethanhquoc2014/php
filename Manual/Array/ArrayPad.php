<?php
/*
array_pad ( array $array , int $size , mixed $value ) : array

Tăng kích thước của mảng lên với giá trị cụ thể là $size
Sau đó thêm phần tử $value vào mảng, nếu $size là số dương thì thêm bên phải, số âm thì thêm vào bên trái
 */
$array = array(1,2,3);

$result = array_pad($array, 5, 1);
print_r($result);

$result = array_pad($array, -5, -1);
print_r($result);

$array = array('a' => 1, 'b' => 2, 'c' => 3);

$result = array_pad($array, 5, 1);
print_r($result);

// Test
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 1
    [4] => 1
)
Array
(
    [0] => -1
    [1] => -1
    [2] => 1
    [3] => 2
    [4] => 3
)
Array
(
    [a] => 1
    [b] => 2
    [c] => 3
    [0] => 1
    [1] => 1
)
 */