<?php
/*
array_map — Applies the callback to the elements of the given arrays
array_map ( callable $callback , array $array1 [, array $... ] ) : array
 */

function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$result = array_map('cube', $a);

print_r($result);

// Test
/*
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
 */