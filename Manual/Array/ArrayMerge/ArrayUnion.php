<?php
$array1 = array(0 => 'zero_a', 2 => 'two_a', 'three' => 'three_a');
$array2 = array(1 => 'one_b', 'three' => 'three_b', 4 => 'four_b');

$result = $array1 + $array2;
print_r($result);

// Test
/*
Array
(
    [0] => zero_a
    [2] => two_a
    [three] => three_a
    [1] => one_b
    [4] => four_b
)
 */