<?php
/*
array_reverse ( array $array [, bool $preserve_keys = FALSE ] ) : array
Đảo ngược mảng
 */
$array = array('a', 'b', 'c');
$result = array_reverse($array);
$result1 = array_reverse($array, $preserve_keys = true);

print_r($result);
print_r($result1);

// Test
/*
Array
(
    [0] => c
    [1] => b
    [2] => a
)
Array
(
    [2] => c
    [1] => b
    [0] => a
)
 */