<?php
// Split an array into chunks

$chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');

$chunk = array_chunk($chars, 5);
var_dump($chunk);

$chunk = array_chunk($chars, 5, true);
var_dump($chunk);

// Test
/*
array(2) {
  [0]=>
  array(5) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
    [3]=>
    string(1) "d"
    [4]=>
    string(1) "e"
  }
  [1]=>
  array(3) {
    [0]=>
    string(1) "f"
    [1]=>
    string(1) "g"
    [2]=>
    string(1) "h"
  }
}

array(2) {
  [0]=>
  array(5) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
    [3]=>
    string(1) "d"
    [4]=>
    string(1) "e"
  }
  [1]=>
  array(3) {
    [5]=>
    string(1) "f"
    [6]=>
    string(1) "g"
    [7]=>
    string(1) "h"
  }
}
 */