<?php
// array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function
// array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
//This function only checks one dimension of a n-dimensional array. Of course you can check deeper dimensions by using, for example, array_diff_uassoc($array1[0], $array2[0], "key_compare_func");.

function keyCompare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1 : -1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");

$result = array_diff_uassoc($array1, $array2, 'keyCompare');
var_dump($result);

// Test
/*
array(3) {
  ["b"]=>
  string(5) "brown"
  ["c"]=>
  string(4) "blue"
  [0]=>
  string(3) "red"
}
 */