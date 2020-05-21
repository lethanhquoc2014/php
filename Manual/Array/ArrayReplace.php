<?php
/*
array_replace( array $array1 [, array $... ] ) : array

Tương tự như array_replace_recursive ngoài việc nó không lặp đệ quy.
 */
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$result = array_replace($array1, $array2);
print_r($result);

$array1 = array(
    'a' => array('b', 'c'),
    'b' => array('a', 'c'),
);
$array2 = array(
    'a' => array('d', 'c', 'f'),
    'b' => array('e'),
);
$result = array_replace($array1, $array2);
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
$result = array_replace($base, $replacements, $replacements2);
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
        )

    [others] => litchis
)
 */
