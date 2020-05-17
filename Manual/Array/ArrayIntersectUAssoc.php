<?php
/*
array_intersect_uassoc — Computes the intersection of arrays with additional index check, compares indexes by a callback function

array_intersect_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
 */

function compare($a, $b)
{
    $a = strtoupper($a);
    $b = strtoupper($b);
    if ($a == $b) {
        return 0;
    }
    return $a > $b ? 1 : -1;
}

$array1 = array("a" => "green", "b" => "Brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

// $result = array_intersect_uassoc($array1, $array2, 'compare');
$result = array_intersect_uassoc($array1, $array2, 'strcasecmp');

var_dump($result);

// Test
/*
array(1) {
  ["b"]=>
  string(5) "brown"
}
 */
