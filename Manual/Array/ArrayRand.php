<?php
/*
array_rand ( array $array [, int $num = 1 ] ) : mixed

Trả về một mảng random key, nếu $num lớn hơn kích thước của mảng thì sẽ bị báo lỗi.
 */
$array = array('a', 'b', 'c', 'd', 'e', 'f');

$result = array_rand($array, 3);
print_r($result);

$result = array_rand($array, 3);
print_r($result);

// Test
/*
Array
(
    [0] => 0
    [1] => 2
    [2] => 5
)
Array
(
    [0] => 0
    [1] => 4
    [2] => 5
)
 */