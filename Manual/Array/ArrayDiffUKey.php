<?php
// array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison
// array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array

function keyCompare($a, $b)
{
    if ($a == $b) {
        return 0;
    } elseif ($a > $b) {
        return 1;
    }
    return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

$result = array_diff_ukey($array1, $array2, 'keyCompare');
var_dump($result);

// Test
/*
array(2) {
  ["red"]=>
  int(2)
  ["purple"]=>
  int(4)
}
 */