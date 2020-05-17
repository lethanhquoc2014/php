<?php
/*
array_intersect_ukey — Computes the intersection of arrays using a callback function on the keys for comparison
array_intersect_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
 */

function compare($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

$result = array_intersect_ukey($array1, $array2, 'compare');

var_dump($result);

// Test
/*
array(2) {
  ["blue"]=>
  int(1)
  ["green"]=>
  int(3)
}
 */