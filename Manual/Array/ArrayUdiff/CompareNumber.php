<?php
/*
array_udiff ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ) : array

Trả về một mảng những phần tử của $array1 mà value của nó không tồn trong $array2
Phải truyền vào một hàm callback
 */
function compare($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = array(1 => 'a', 2 => 'b', 3 => 'c');
$array2 = array(1 => 'd', 2 => 'd', 3 => 'e');
$result = array_udiff($array1, $array2, 'compare');
print_r($result);

$array1 = array(1 => 'a', 2 => 'b', 3 => 'c');
$array2 = array(1 => 'd', 2 => 'c', 3 => 'e');
$result = array_udiff($array1, $array2, 'compare');
print_r($result);

// Test
/*
Array
(
    [1] => a
    [2] => b
    [3] => c
)
Array
(
    [1] => a
    [2] => b
)
 */