<?php
$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];

var_dump(array_filter($entry));

// Test
/*
array(2) {
  [0]=>
  string(3) "foo"
  [2]=>
  int(-1)
}
 */