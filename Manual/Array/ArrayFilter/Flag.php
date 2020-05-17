<?php

function filterUseKey($key)
{
    return $key == 'b';
}

function filterUseKeyAndValue($v, $k)
{
    return $k == 'b' || $v == 4;
}

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, 'filterUseKey', ARRAY_FILTER_USE_KEY));
var_dump(array_filter($arr, 'filterUseKeyAndValue', ARRAY_FILTER_USE_BOTH));

// Test
/*
array(1) {
  ["b"]=>
  int(2)
}
array(2) {
  ["b"]=>
  int(2)
  ["d"]=>
  int(4)
}
 */