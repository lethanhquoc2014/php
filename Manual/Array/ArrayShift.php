<?php
/*
array_shift ( array &$array ) : mixed

Lấy phần tử đầu tiên ra khỏi mảng.
 */

$array = array("orange", "banana", "apple", "raspberry");
$first_item = array_shift($array);
echo 'First item: ' . $first_item . PHP_EOL;

$array = array(
    array('id' => 1, 'name' => 'quoc'),
    array('id' => 2, 'name' => 'trang'),
);
$first_item = array_shift($array);
print_r($first_item);

// Test
/*
First item: orange
Array
(
    [id] => 1
    [name] => quoc
)
 */

