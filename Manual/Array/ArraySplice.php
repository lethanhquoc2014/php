<?php
/*
array_splice ( array &$input , int $offset [, int $length = count($input) [, mixed $replacement = array() ]] ) : array

Xoá phần tử của mảng và thay thế bằng phần tử khác.
 */

$array = array("red", "green", "blue", "yellow");
array_splice($array, 2);
print_r($array);

$array = array("red", "green", "blue", "yellow");
array_splice($array, 1, -1);
print_r($array);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_dump($input);

// Test
/*
Array
(
    [0] => red
    [1] => green
)
Array
(
    [0] => red
    [1] => yellow
)
array(2) {
  [0]=>
  string(3) "red"
  [1]=>
  string(6) "orange"
}
array(5) {
  [0]=>
  string(3) "red"
  [1]=>
  string(5) "green"
  [2]=>
  string(4) "blue"
  [3]=>
  string(5) "black"
  [4]=>
  string(6) "maroon"
}
 */