<?php
// array_count_values — Counts all the values of an array
// array_count_values ( array $array ) : array

$array = array(1, "hello", 1, "world", "hello", 1, 1);
var_dump(array_count_values($array));