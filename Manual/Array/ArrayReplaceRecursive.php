<?php
/*
array_replace_recursive ( array $array1 [, array $... ] ) : array

Lặp đệ quy nếu tìm thấy key của mảng $array1 trong $array2 thì sẽ replace value của $array1 bằng value của $array2, nếu key của $array2 không tìm thấy trong 1 thì sẽ thêm phần tử này trong $array1.
 */
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$result = array_replace_recursive($array1, $array2);
print_r($result);

$array1 = array(
    'a' => array('b', 'c'),
    'b' => array('a', 'c'),
);
$array2 = array(
    'a' => array('d', 'c', 'f'),
    'b' => array('e'),
);
$result = array_replace_recursive($array1, $array2);
print_r($result);

$base = array(
    'citrus' => array("orange") ,
    'berries' => array("blackberry", "raspberry"),
    'others' => 'banana' 
);
$replacements = array(
    'citrus' => 'pineapple',
    'berries' => array('blueberry'),
    'others' => array('litchis')
);
$replacements2 = array(
    'citrus' => array('pineapple'),
    'berries' => array('blueberry'),
    'others' => 'litchis'
);
$result = array_replace_recursive($base, $replacements, $replacements2);
print_r($result);

// Test
/*
Array
(
    [0] => 4
    [1] => 5
    [2] => 6
)
Array
(
    [a] => Array
        (
            [0] => d
            [1] => c
            [2] => f
        )

    [b] => Array
        (
            [0] => e
            [1] => c
        )
)
Array
(
    [citrus] => Array
        (
            [0] => pineapple
        )

    [berries] => Array
        (
            [0] => blueberry
            [1] => raspberry
        )

    [others] => litchis
)
 */
